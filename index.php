<!DOCTYPE html>
    <html>
        <head>
            <?php include 'includes/header.html' ?>
            <title>MemeouMemepas</title>


        </head>
        <body>
          <div class="jumbotron">




            <div id="idimg" class="img-fluid">
                <img id='img' src="img/futurama1">

            </div>
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <button class="btn btn-outline-secondary" type="button">&#10004;</button>
              </div>
              <select class="custom-select" id="inputGroupSelect03">
                <option selected>Choose...</option>
                <option value="/img/1.png">futurama1</option>
                <option value="/img/2.png">futurama2</option>
                <option value="/img/3.jpeg">futurama3</option>
                <option value="/img/4.png">futurama4</option>
                <option value="/img/5.jpeg">simpson5</option>
                <option value="/img/6.jpeg">simpson6</option>
                <option value="/img/7.png">simpson7</option>
                <option value="/img/7.png">simpson8</option>
                <option value="/img/7.png">south9</option>
                <option value="/img/7.png">south10</option>
                <option value="/img/7.png">south11</option>
                <option value="/img/7.png">south12</option>
              </select>
            </div>


            <label for="basic-url"></label>
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon3">Message du haut</span>
                <input type="text" class="form-control" id="basic-url-ht" value="textht" aria-describedby="basic-addon3">
              </div>
              <div class="input-group-prepend">
                  <span class="input-group-text" id="basic-addon3">Message du bas</span>
                  <input type="text" class="form-control" id="basic-url-bas" onfocus="this.select()" value="textbas" aria-describedby="basic-addon3">
              </div>
            </div>

            <button type="button" class="btn btn-primary btn-lg btn-block">Validate MEME &#10004;</button>
          </div>


          <?php include 'includes/base_js.html' ?>

        </body>
    </html>
