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
        <a href="Add.php"><button class="ui primary button">Add product</button></a>
        
        <button class="ui button">Add property</button>
        <button class="ui button">Sync from VillaTheme</button>
      </div>
      <div class="column">
        <div class="ui search">
          <div class="ui icon input">
            <input class="prompt" type="text" placeholder="Search product...">
            <i class="search icon"></i>
          </div>
          <div class="results"></div>
        </div>
      </div>
    </div>

    <div class="row">

      <div class="column">
        <div class="ui compact menu">
          <div class="ui simple dropdown item">
            Date
            <i class="dropdown icon"></i>
            <div class="menu">
              <div class="item">Choice 1</div>
              <div class="item">Choice 2</div>
              <div class="item">Choice 3</div>
            </div>
          </div>
        </div>
      </div>

      <div class="column">
        <div class="ui compact menu">
          <div class="ui simple dropdown item">
            ASC
            <i class="dropdown icon"></i>
            <div class="menu">
              <div class="item">Increase</div>
              <div class="item">Decrease</div>
            </div>
          </div>
        </div>
      </div>

      <div class="column">
        <div class="ui compact menu">
          <div class="ui simple dropdown item">
            Category
            <i class="dropdown icon"></i>
            <div class="menu">
              <div class="item">Choice 1</div>
              <div class="item">Choice 2</div>
              <div class="item">Choice 3</div>
            </div>
          </div>
        </div>
      </div>

      <div class="column">
        <div class="ui compact menu">
          <div class="ui simple dropdown item">
            Select tag
            <i class="dropdown icon"></i>
            <div class="menu">
              <div class="item">Choice 1</div>
              <div class="item">Choice 2</div>
              <div class="item">Choice 3</div>
            </div>
          </div>
        </div>
      </div>

      <div class="column">
        <div class="ui calendar" id="standard_calendar">
          <div class="ui fluid input">
            <input type="date" id="birthday" name="birthday">
          </div>
        </div>
      </div>

      <div class="column">
        <div class="ui calendar" id="standard_calendar">
          <div class="ui fluid input">
            <input type="date" id="birthday" name="birthday">
          </div>
        </div>
      </div>

      <div class="column">
        <div class="ui segment"></div>
      </div>

      <div class="column">
        <div class="ui segment"></div>
      </div>


      <div class="column">
        <button class="ui button">Filter</button>
      </div>
    </div>
  </div>


  <table class="ui celled table">
    <thead>
      <tr>
        <th>Date</th>
        <th>Product name</th>
        <th>SKU</th>
        <th>Price</th>
        <th>Feature Image</th>
        <th>Gallery</th>
        <th>Categories</th>
        <th>Tags</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <?php
      include_once('../models/MProduct.php');
      $arrProduct = MProduct::getAllProduct();
      foreach ($arrProduct as $value) {
      ?>
        <tr>
          <td><?php echo $value->getId() ?></td>
          <td><?php echo $value->getSku() ?></td>
          <td><?php echo $value->getTitle() ?></td>
          <td><?php echo $value->getPrice() ?></td>
          <td><?php echo $value->getFeaturedImage() ?></td>
          <td><?php echo $value->getGallery() ?></td>
          <td><?php echo $value->getCategory() ?></td>
          <td><?php echo $value->getTag() ?></td>
          <td>
            <a href="Update.php/id=<?php echo $value->getId()?>"><i class="edit icon"></i></a>
            <a href="#"><i class="trash icon"></i></a>
          </td>
        </tr>
      <?php
      }
      ?>
    </tbody>
  </table>

  <div class="center">
    <div class="pagination">
      <a href="#">&laquo;</a>
      <a href="#">1</a>
      <a href="#" class="active">2</a>
      <a href="#">3</a>
      <a href="#">&raquo;</a>
    </div>
  </div>
</body>

</html>
