<!-- footer.php -->
<!-- Mobile version -->
<div class="footer-buttons mobile">
    <button id="current-screen-button">口コミ</button>
    <button id="write-button">書き込み</button>
    <button id="record-button">記録</button>
    <button id="account-display">アカウント情報</button>
</div>

<!-- Web version -->
<div class="footer-buttons web">
    <a href="index.php" class="footer-button" id="index-button">口コミ</a>
    <a href="comment.php" class="footer-button" id="comment-button">書き込み</a>
    <a href="record.php" class="footer-button" id="record-button">記録</a>
    <a href="account.php" class="footer-button" id="account-button">アカウント情報</a>
</div>

<style>
    .footer-buttons {
        display: flex;
        justify-content: center;
        gap: 1rem;
        position: fixed;
        bottom: 0;
        width: 100%;
        background-color: #fff;
        padding: 1rem;
        border-top: 2px solid #00bfff;
        box-shadow: 0 -2px 5px rgba(0, 0, 0, 0.1);
    }

    .footer-buttons button, .footer-buttons a {
        padding: 0.5rem 1rem;
        border: none;
        background-color: #007aff; /* 青色に変更 */
        color: white;
        border-radius: 5px;
        font-size: 1rem;
        cursor: pointer;
        text-decoration: none;
        text-align: center;
        width: 100%; /* Full width for mobile responsiveness */
    }

    .footer-buttons button:hover, .footer-buttons a:hover {
        background-color: #0056b3;
    }

    .footer-buttons.web a {
        padding: 0.5rem 3rem; /* Shorter height and longer width */
        font-size: 1.2rem; /* Increased font size */
    }

    @media (max-width: 600px) {
        .footer-buttons.web {
            display: none; /* Hide web version on mobile */
        }

        .footer-buttons.mobile {
            flex-direction: column; /* Stack buttons vertically on small screens */
            gap: 1rem; /* Adjust gap for mobile view */
        }

        .footer-buttons.mobile button {
            width: 100%; /* Make buttons full-width on mobile */
            padding: 1rem; /* Adjust padding for mobile view */
            font-size: 1rem; /* Adjust font size for mobile view */
        }
    }

    @media (min-width: 601px) {
        .footer-buttons.mobile {
            display: none; /* Hide mobile version on web */
        }
    }
</style>

<script>
document.addEventListener("DOMContentLoaded", function () {
    document.getElementById("account-display")?.addEventListener("click", function() {
        window.location.href = "account.php";
    });

    document.getElementById("record-button")?.addEventListener("click", function() {
        window.location.href = "record.php";
    });

    document.getElementById("current-screen-button")?.addEventListener("click", function() {
        window.location.href = "index.php";
    });

    document.getElementById("write-button")?.addEventListener("click", function() {
        window.location.href = "comment.php";
    });
});
</script>
