<!DOCTYPE html>
    <html>
        <head>
            <?php include 'includes/header.html' ?>
            <title>MemeouMemepas</title>


        </head>
        <body>
          <div class="jumbotron">


            <div id="idimg" class="img-fluid">
                <p id="textht"></p>
                <img src="img/futurama1">
                <p id="textbas"></p>
            </div>


            <div class="input-group mb-3">
                <!-- <div class="input-group-prepend">
                    <button class="btn btn-outline-secondary" type="button">&#10004;</button>
                </div> -->
                <form class="" action="expor_img.php" method="post">
                    <select class="custom-select" id="inputGroupSelect03">
                        <option selected>Choose...</option>
                        <option value="/img/1.png">futurama1</option>
                        <option value="/img/2.png">futurama2</option>
                        <option value="/img/3.jpeg">futurama3</option>
                        <option value="/img/4.png">futurama4</option>
                        <option value="/img/5.jpeg">simpson5</option>
                        <option value="/img/6.jpeg">simpson6</option>
                        <option value="/img/7.png">simpson7</option>
                        <option value="/img/8.png">simpson8</option>
                        <option value="/img/9.png">south9</option>
                        <option value="/img/10.png">south10</option>
                        <option value="/img/11.png">south11</option>
                        <option value="/img/12.png">south12</option>
                    </select>
                    <input type="hidden" class="form-control" id="basic-img-hide" name="imghidename" value="futurama1" aria-describedby="basic-addon3">
                    <label for="basic-url"></label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon3">Message du haut</span>
                            <input type="text" class="form-control" id="basic-url-ht" name="textht" value="textht" aria-describedby="basic-addon3">
                        </div>
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon">Message du bas</span>
                            <input type="text" class="form-control" id="basic-url-bas" name="textbas" onfocus="this.select()" value="textbas" aria-describedby="basic-addon3">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary btn-lg btn-block">Validate MEME &#10004;</button>
                </form>
                </div>
            </div>

            <script type="text/javascript" src="includes/script.js"></script>

            <?php include 'includes/base_js.html' ?>

        </body>
    </html>
