<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="CSS/StyleLinkStack.css">
    <title>Link Stack - Termos</title>
    <script>
        
    </script>
</head>

<?php
    include_once('LS-Sistema.php');
?>

<body align="center">

    <!-- ÁREA DA LOGO -->

    <div class="divSeparacao">
        <div style="margin: 2em;">
            <svg width="269" viewBox="0 0 269 62" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M88.5778 17.572L85.9138 18.616V37.408H97.5418L98.4778 33.268H100.602V40H80.1538V38.02L82.8178 36.94V18.616L80.1538 17.572V15.52H88.5778V17.572ZM106.635 14.044C107.379 14.044 107.967 14.26 108.399 14.692C108.855 15.124 109.083 15.736 109.083 16.528C109.083 17.32 108.855 17.932 108.399 18.364C107.967 18.796 107.379 19.012 106.635 19.012C105.891 19.012 105.291 18.796 104.835 18.364C104.403 17.932 104.187 17.32 104.187 16.528C104.187 15.736 104.403 15.124 104.835 14.692C105.291 14.26 105.891 14.044 106.635 14.044ZM108.435 36.94L110.883 38.02V40H102.963V38.02L105.411 36.94V24.988L102.963 23.98V21.928H108.435V36.94ZM134.743 38.02V40H129.271V28.084C129.271 26.668 128.923 25.648 128.227 25.024C127.555 24.376 126.559 24.052 125.239 24.052C124.399 24.052 123.571 24.16 122.755 24.376C121.963 24.592 120.799 24.976 119.263 25.528V36.94L122.071 38.02V40H113.791V38.02L116.239 36.94V24.988L113.791 23.98V21.928H117.787L118.723 23.404C120.067 22.708 121.339 22.204 122.539 21.892C123.739 21.58 124.963 21.424 126.211 21.424C127.723 21.424 128.923 21.664 129.811 22.144C130.699 22.6 131.335 23.344 131.719 24.376C132.103 25.384 132.295 26.752 132.295 28.48V36.94L134.743 38.02ZM157.88 38.02V40H153.812L146.216 31.108L142.22 34.06V36.94L144.668 38.02V40H136.748V38.02L139.196 36.94V17.5L136.748 16.492V14.44H142.22V30.928L150.716 24.772L147.728 23.98V21.928H156.764V23.98L154.316 25.168L148.664 29.344L155.252 36.94L157.88 38.02ZM181.701 26.32C183.693 26.704 185.169 27.112 186.129 27.544C187.113 27.976 187.821 28.624 188.253 29.488C188.709 30.328 188.937 31.552 188.937 33.16C188.937 34.96 188.613 36.376 187.965 37.408C187.317 38.44 186.297 39.184 184.905 39.64C183.513 40.072 181.617 40.288 179.217 40.288C175.977 40.288 172.977 39.928 170.217 39.208V32.8H172.701L173.313 36.94C175.233 37.396 177.237 37.624 179.325 37.624C181.101 37.624 182.445 37.492 183.357 37.228C184.293 36.964 184.929 36.556 185.265 36.004C185.601 35.428 185.769 34.648 185.769 33.664C185.769 32.464 185.625 31.624 185.337 31.144C185.049 30.664 184.473 30.292 183.609 30.028C182.745 29.764 181.077 29.404 178.605 28.948L177.705 28.768C175.737 28.408 174.213 27.976 173.133 27.472C172.077 26.944 171.321 26.26 170.865 25.42C170.433 24.58 170.217 23.464 170.217 22.072C170.217 20.368 170.529 19.024 171.153 18.04C171.801 17.032 172.809 16.312 174.177 15.88C175.545 15.448 177.369 15.232 179.649 15.232C182.457 15.232 185.361 15.544 188.361 16.168V22.468H185.985L185.409 18.472C183.585 18.088 181.617 17.896 179.505 17.896C177.849 17.896 176.577 18.028 175.689 18.292C174.801 18.532 174.189 18.916 173.853 19.444C173.541 19.948 173.385 20.644 173.385 21.532C173.385 22.636 173.541 23.428 173.853 23.908C174.189 24.388 174.789 24.76 175.653 25.024C176.541 25.288 178.185 25.648 180.585 26.104L181.701 26.32ZM201.002 40.288C198.698 40.288 197.042 39.82 196.034 38.884C195.05 37.948 194.558 36.364 194.558 34.132V24.448H191.75V22.432L194.558 21.928L195.638 16.708H197.582V21.928L203.738 21.964V24.484L197.582 24.448V34.132C197.582 35.116 197.702 35.86 197.942 36.364C198.182 36.868 198.578 37.216 199.13 37.408C199.682 37.6 200.486 37.696 201.542 37.696C202.358 37.696 203.21 37.612 204.098 37.444V39.964C203.234 40.18 202.202 40.288 201.002 40.288ZM226.245 38.02V40H221.961L221.025 37.408C220.041 38.416 218.973 39.16 217.821 39.64C216.693 40.12 215.421 40.36 214.005 40.36C211.701 40.36 209.997 39.916 208.893 39.028C207.789 38.14 207.237 36.7 207.237 34.708C207.237 32.596 207.897 31.072 209.217 30.136C210.537 29.176 212.661 28.696 215.589 28.696C216.741 28.696 217.749 28.804 218.613 29.02C219.501 29.212 220.221 29.452 220.773 29.74V28.336C220.773 27.232 220.629 26.38 220.341 25.78C220.077 25.156 219.585 24.712 218.865 24.448C218.169 24.16 217.149 24.016 215.805 24.016C213.381 24.016 210.861 24.304 208.245 24.88V22.288C210.909 21.712 213.453 21.424 215.877 21.424C218.133 21.424 219.825 21.652 220.953 22.108C222.105 22.564 222.861 23.224 223.221 24.088C223.605 24.952 223.797 26.152 223.797 27.688V36.94L226.245 38.02ZM210.405 34.492C210.405 35.668 210.693 36.508 211.269 37.012C211.869 37.516 212.949 37.768 214.509 37.768C215.661 37.768 216.765 37.564 217.821 37.156C218.901 36.724 219.885 36.136 220.773 35.392V31.792C219.429 31.408 217.809 31.216 215.913 31.216C213.825 31.216 212.385 31.48 211.593 32.008C210.801 32.536 210.405 33.364 210.405 34.492ZM238.606 21.424C240.598 21.424 242.002 21.676 242.818 22.18C243.634 22.684 244.042 23.488 244.042 24.592C244.042 26.536 242.89 27.508 240.586 27.508L239.002 23.908C237.106 23.908 235.678 24.124 234.718 24.556C233.758 24.988 233.086 25.696 232.702 26.68C232.342 27.64 232.162 29.044 232.162 30.892C232.162 32.788 232.366 34.24 232.774 35.248C233.206 36.256 233.854 36.952 234.718 37.336C235.606 37.72 236.806 37.912 238.318 37.912C239.35 37.912 240.286 37.852 241.126 37.732C241.966 37.588 242.842 37.348 243.754 37.012V39.604C243.01 39.892 242.134 40.108 241.126 40.252C240.142 40.42 239.158 40.504 238.174 40.504C235.198 40.504 232.918 39.796 231.334 38.38C229.774 36.94 228.994 34.48 228.994 31C228.994 27.616 229.786 25.18 231.37 23.692C232.978 22.18 235.39 21.424 238.606 21.424ZM268.27 38.02V40H264.202L256.606 31.108L252.61 34.06V36.94L255.058 38.02V40H247.138V38.02L249.586 36.94V17.5L247.138 16.492V14.44H252.61V30.928L261.106 24.772L258.118 23.98V21.928H267.154V23.98L264.706 25.168L259.054 29.344L265.642 36.94L268.27 38.02Z" fill="white"/>
                <path d="M2 31H42" stroke="white" stroke-width="4" stroke-linecap="round"/>
                <path d="M2 44H42" stroke="white" stroke-width="4" stroke-linecap="round"/>
                <path d="M2 18H4.5H7" stroke="white" stroke-width="4" stroke-linecap="round"/>
                <path d="M42 31L59.3205 21" stroke="white" stroke-width="4" stroke-linecap="round"/>
                <path d="M42 44L59.3205 34" stroke="white" stroke-width="4" stroke-linecap="round"/>
                <path d="M42 18L50.6603 13L59.3205 8" stroke="white" stroke-width="4" stroke-linecap="round"/>
                <rect x="7" y="14" width="11" height="8" rx="3" stroke="white" stroke-width="4"/>
                <path d="M37 18H39.5H42" stroke="white" stroke-width="4" stroke-linecap="round"/>
                <path d="M17 18H22.2381H27" stroke="white" stroke-width="4" stroke-linecap="round"/>
                <rect x="26" y="14" width="11" height="8" rx="3" stroke="white" stroke-width="4"/>
            </svg>
        </div>
    </div>

    <div align="center">

        <div class="divTermos">
            <br>
            TERMOS
        </div>

    </div>
</body>
</html>
