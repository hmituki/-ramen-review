<?php
// データベース接続情報
$dbHost     = 'localhost';
$dbUsername = 'dbuser';
$dbPassword = 'ecc';
$dbName     = 'sdb';
$tableName  = 'safety'; // 対象テーブル名（スペース削除）

// POSTリクエストが送信された場合の処理
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // バックアップ処理
    if (isset($_POST['backup'])) {
        // バックアップファイル名を作成
      $backupFile = 'backup/backup_' . $tableName . '_' . date('Y-m-d_H-i-s') . '.sql';

        // mysqldumpコマンドを実行してバックアップを作成
        $command = "mysqldump --host=$dbHost --user=$dbUsername --password=$dbPassword $dbName $tableName > $backupFile";
    system($command, $output);

       
    }

    // テーブル削除処理
    if (isset($_POST['delete_table'])) {
        // データベースに接続
        $conn = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

        // 接続エラーの確認
        //if ($conn->connect_error) {
          //  die("接続に失敗しました: " . $conn->connect_error);
        

        // テーブル削除SQLを実行
        $sql = "DROP TABLE IF EXISTS $tableName";
        if ($conn->query($sql) === TRUE) {
         
      
        }

        // 接続を閉じる
        //$conn->close();
    }
}
?>

<!-- フォーム部分 -->
<form method="post">
    <button type="submit" name="backup">safety テーブル バックアップ</button>
    <button type="submit" name="delete_table">safety テーブル 削除</button>
</form>

