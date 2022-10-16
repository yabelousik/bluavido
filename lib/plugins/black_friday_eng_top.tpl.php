<link rel="stylesheet" href="shared/plugins/black_friday_eng/style.css">
<link rel="stylesheet" type="text/css" href="shared/plugins/black_friday_eng/black_friday.css">
<div id="corona_banner">
    <div class="corona-wrapper">
        <div class="black_friday__banner">
            <div class="black_friday__wrapper">
                <div class="black_friday__startdate">26.11</div>
                <div class="black_friday__enddate-text">
                    SALE TILL <span class="black_friday__enddate-date">28.11</span>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    let image_elem = document.querySelector('.black_friday__wrapper');

    document.addEventListener('load', () => {
        document.body.setAttribute('style', `margin-top: ${image_elem.clientHeight}px !important`);
    });

    document.body.onresize = () => {
        document.body.setAttribute('style', `margin-top: ${image_elem.clientHeight}px !important`);
    };
</script>
<script src="shared/plugins/black_friday_eng/script.js"></script>
