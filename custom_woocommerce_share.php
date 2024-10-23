function custom_woocommerce_share_content() {
    echo '<div class="btn-share shareButton">
        <span class="btn-text">Share</span>
        <span class="btn-icon">
            <svg
                t="1580465783605"
                class="icon"
                viewBox="0 0 1024 1024"
                version="1.1"
                xmlns="http://www.w3.org/2000/svg"
                p-id="9773"
                width="18"
                height="18"
            >
                <path
                    d="M767.99994 585.142857q75.995429 0 129.462857 53.394286t53.394286 129.462857-53.394286 129.462857-129.462857 53.394286-129.462857-53.394286-53.394286-129.462857q0-6.875429 1.170286-19.456l-205.677714-102.838857q-52.589714 49.152-124.562286 49.152-75.995429 0-129.462857-53.394286t-53.394286-129.462857 53.394286-129.462857 129.462857-53.394286q71.972571 0 124.562286 49.152l205.677714-102.838857q-1.170286-12.580571-1.170286-19.456 0-75.995429 53.394286-129.462857t129.462857-53.394286 129.462857 53.394286 53.394286 129.462857-53.394286 129.462857-129.462857 53.394286q-71.972571 0-124.562286-49.152l-205.677714 102.838857q1.170286 12.580571 1.170286 19.456t-1.170286 19.456l205.677714 102.838857q52.589714-49.152 124.562286-49.152z"
                    p-id="9774"
                    fill="#ffffff"
                ></path>
            </svg>
        </span>
    </div>';

    echo "<style>
    button.single_add_to_cart_button {
        display: inline-block !important;
    }
    .div_evowap_btn .evowap_btn {
        padding: 6px 20px !important;
    }
    .btn-share {
        display: inline-block !important;
        background-color: #f46d38;
        position: relative;
        margin-top: 5px;
        padding: 5px 15px;
        font-weight: 500;
        font-size: 16px;
        line-height: 1;
        color: white;
        border: none;
        outline: none;
        overflow: hidden;
        border-radius: 24px;
        cursor: pointer;
        filter: drop-shadow(0 2px 2px rgba(39, 94, 254, 0.32));
    }
    .btn-share:hover {
        opacity: 0.5;
    }
    .btn-share .btn-text,
    .btn-share .btn-icon {
        display: inline-flex;
        vertical-align: middle;
    }
    .btn-share .btn-icon {
        margin-left: 8px;
    }
    </style>";

    echo "<script>
    jQuery(document).ready(function($) {
        $('.shareButton').on('click', function() {
            // Check if the Web Share API is available
            if (navigator.share) {
                navigator.share({
                    title: document.title,
                    text: 'I found this page really interesting and thought you might like it too!',
                    url: window.location.href
                }).then(() => {
                    console.log('Thanks for sharing!');
                }).catch((error) => {
                    console.error('Something went wrong sharing the page', error);
                });
            } else {
                // If Web Share is not available, you can fallback to other sharing methods
                console.log('Web Share API is not supported in this browser.');
                alert('Share is not supported on your browser. Please copy the URL manually.');
            }
        });
    });
    </script>";
}

add_action('woocommerce_share', 'custom_woocommerce_share_content');
