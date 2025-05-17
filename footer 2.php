<div class="footer-buttons">
    <a href="index.php" class="footer-button" id="index-button">口コミ</a>
    <a href="comment.php" class="footer-button" id="comment-button">書き込み</a>
    <a href="record.php" class="footer-button" id="record-button">記録</a>
    <a href="account.php" class="footer-button" id="account-button">アカウント情報</a>
</div>

<style>
    .footer-buttons {
        display: flex;
        justify-content: center;
        gap: 1.5rem; /* Increased gap for more spacing */
        position: fixed;
        bottom: 0;
        width: 100%;
        left: 50%;
        transform: translateX(-50%);
        background-color: #fff;
        padding: 1rem;
        border-top: 2px solid #00bfff;
        box-shadow: 0 -2px 5px rgba(0, 0, 0, 0.1);
    }

    .footer-buttons a {
        padding: 0.5rem 3rem; /* Shorter height and longer width */
        border: none;
        background-color: #007aff; /* 青色に変更 */
        color: white;
        border-radius: 5px;
        font-size: 1.2rem; /* Increased font size */
        cursor: pointer;
        text-decoration: none;
        text-align: center;
    }

    .footer-buttons a:hover {
        background-color: #0056b3;
    }

    @media (max-width: 600px) {
        .footer-buttons {
            flex-direction: column; /* Stack buttons vertically on small screens */
            gap: 1rem; /* Adjust gap for mobile view */
        }

        .footer-buttons a {
            width: 100%; /* Make buttons full-width on mobile */
            padding: 1rem; /* Adjust padding for mobile view */
            font-size: 1rem; /* Adjust font size for mobile view */
        }
    }
</style>
