<?php
// レスポンスをJSON形式で返す
header("Content-Type: application/json");

// CORS設定（開発中は * でOK。本番は必要に応じてドメイン制限）
header("Access-Control-Allow-Origin: *");

// DB接続用ファイルを読み込む
require_once __DIR__ . "/def.php";

try {
    // DB接続処理
    $db = getDB();
} catch (PDOException $e) {
    // 接続失敗時は500エラーとJSONを返して終了
    http_response_code(500);
    echo json_encode(['error' => 'DB接続失敗: ' . $e->getMessage()]);
    exit;
}

// JSON形式のPOSTデータを取得
$input = json_decode(file_get_contents('php://input'), true);

// クエリパラメータを取得
$emp_no = isset($_POST['emp_no']) ? trim(filter_var($_POST['emp_no'])) : null;
$password = isset($_POST['password']) ? trim(filter_var($_POST['password'])) : null;

// バリデーション（必須チェック）
if (empty($emp_no) || empty($password)) {
    http_response_code(400);
    echo json_encode(['error' => '社員番号とパスワードを指定してください']);
    exit;
}

try {
    // トランザクション開始
    $db->beginTransaction();

    // INSERT文（emp_no が既に存在する場合は UPDATE に切り替える）
    $sql = "INSERT INTO safety (emp_no, status, commute, injury, ins_time)
            VALUES (:emp_no, :status, :commute, :injury, CURRENT_TIMESTAMP)";

    $stmt = $db->prepare($sql);
    $stmt->bindValue(':emp_no', $emp_no);
    $stmt->bindValue(':status', $input['status']);
    $stmt->bindValue(':commute', $input['commute']);
    $stmt->bindValue(':injury', $input['injury']);
    $stmt->execute();

    // コミットして確定
    $db->commit();

    // 成功レスポンス
    echo json_encode(['result' => '登録または更新成功']);

} catch (PDOException $e) {
    // エラー時はロールバック
    $db->rollBack();

    // エラーレスポンスをJSONで返す
    http_response_code(500);
    echo json_encode(['error' => '登録エラー: ' . $e->getMessage()]);
    exit;
}
?>