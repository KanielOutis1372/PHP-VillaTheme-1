<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.5.0/semantic.min.css">
    <script src="./lib/Semantic-UI-CSS-master/semantic.min.js"></script>
    <link rel="stylesheet" href="./styles.css">
</head>

<body>
    <div class="ui equal width grid">
        <div class="row">
            <div class="column">
                <h1>ADD NEW PRODUCT</h1>
            </div>
            <div class="column">
                <button class="ui primary button pull-right">Cancel</button>
            </div>
        </div>

        <div class="row">
            <div class="column">
                <form class="ui form" action="" method="GET">
                    <div class="field">
                        <label for="skuId">SKU</label>
                        <input type="text" id="skuId" name="sku" placeholder="SKU...">
                    </div>
                    <div class="field">
                        <label for="titleId">TITLE</label>
                        <input type="text" id="titleId" name="title" placeholder="title...">
                    </div>
                    <div class="field">
                        <label for="priceId">PRICE</label>
                        <input type="number" id="priceId" name="price" placeholder="price...">
                    </div>
                    <div class="field">
                        <label for="salepriceId">SALE PRICE</label>
                        <input type="number" id="salepriceId" name="sale-price" placeholder="sale price...">
                    </div>
                    <div class="field">
                        <label for="featuredimgId">FEAETURED IMAGE</label>
                        <input type="file" id="featuredimgId" name="featuredimg">
                    </div>
                    <div class="field">
                        <label for="descId">DESCRIPTION</label>
                        <textarea name="desc" id="descId" cols="30" rows="10"></textarea>
                    </div>
                    <div class="field">
                        <label for="createddateId">CREADTED DATE</label>
                        <input type="date" id="createddateId" name="createddate">
                    </div>
                    <div class="field">
                        <label for="modifieddateId">MODIFIED DATE</label>
                        <input type="date" id="modifieddateId" name="modifieddate">
                    </div>
                    <button class="ui button" type="submit">Add</button>
                </form>
            </div>
        </div>

        <?php 
            //get du lieu nhap vao tu form
            //add vao database
            //chuyen ve home show lai bang
            
        ?>

    </div>
</body>

</html>
