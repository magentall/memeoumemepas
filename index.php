<!DOCTYPE html>
    <html>
        <head>
            <?php include 'includes/header.html' ?>
            <title>MemeouMemepas</title>

            
        </head>
        <body>
          <div class="jumbotron">




            <div id="idimg" class="img-fluid">

            </div>
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <button class="btn btn-outline-secondary" type="button">&#10004;</button>
              </div>
              <select class="custom-select" id="inputGroupSelect03">
                <option selected>Choose...</option>
                <option value="/img/1.png">One</option>
                <option value="/img/2.png">Two</option>
                <option value="/img/3.jpeg">Three</option>
                <option value="/img/4.png">Three</option>
                <option value="/img/5.jpeg">Three</option>
                <option value="/img/6.jpeg">Three</option>
                <option value="/img/7.png">Three</option>
              </select>
            </div>


            <label for="basic-url"></label>
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon3">Enter your comment</span>
              </div>
              <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
            </div>

            <button type="button" class="btn btn-primary btn-lg btn-block">Validate MEME &#10004;</button>
          </div>


          <?php include 'includes/base_js.html' ?>

        </body>
    </html>
