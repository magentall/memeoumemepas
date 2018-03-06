<!DOCTYPE html>
    <html>
        <head>
            <?php include 'includes/header.php' ?>
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
                        <option value="/img/futurama1.png">futurama1</option>
                        <option value="/img/futurama2.png">futurama2</option>
                        <option value="/img/futurama3">futurama3</option>
                        <option value="/img/futurama4.png">futurama4</option>
                        <option value="/img/simpson5">simpson5</option>
                        <option value="/img/simpson6">simpson6</option>
                        <option value="/img/simpson7.png">simpson7</option>
                        <option value="/img/simpson8.png">simpson8</option>
                        <option value="/img/south9.png">south9</option>
                        <option value="/img/south10.png">south10</option>
                        <option value="/img/south11.png">south11</option>
                        <option value="/img/south12.png">south12</option>
                    </select>
                    <input type="text" class="form-control" id="basic-img-hide" name="imghidename" value="futurama1" aria-describedby="basic-addon3">
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
                    <button type="submit" name="submit" class="btn btn-primary btn-lg btn-block">Validate MEME &#10004;</button>
                </form>
                </div>
            </div>

            <script type="text/javascript" src="includes/script.js"></script>

            <?php include 'includes/base_js.php' ?>

        </body>
    </html>
