<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="panierstyle.css" rel="stylesheet">
    <title>Panier</title>
</head>
    <main>
      <section class="bigsection">
      <section class="firstsc">
      <table class="table">
        <thead>
          <tr>
            <th scope="col-2">Produit</th>
            <th scope="col-2">Prix</th>

            <th scope="col-2"></th>
            <th scope="col-2"></th>
          </tr>
        </thead>
        <tbody>
                <tr>
                    <td scope="col">predator</td>
                    <td scope="col">2599dh</td> 
                    <td scope="col">
                    <form action="panier.php" method="post">
                    <button name="remove" class="btn btn-primary">Effacer</button>
                    </form>
                    </td>
                </tr>
                <tr>
                    <td scope="col">predator</td>
                    <td scope="col">2599dh</td> 
                    <td scope="col">
                    <form action="panier.php" method="post">
                    <button name="remove" class="btn btn-primary">Effacer</button>
                    </form>
                    </td>
                </tr>
                <tr>
                    <td scope="col">predator</td>
                    <td scope="col">2599dh</td> 
                    <td scope="col">
                    <form action="panier.php" method="post">
                    <button name="remove" class="btn btn-primary">Effacer</button>
                    </form>
                    </td>
                </tr>
        </tbody>
      </table>
    </section>
    <section class="secondsc">
      <form action="login.php" method="post">
      <h3>Carte Total</h3>
      <div class="card" style="width: 18rem;">
        <div class="card-body">
          
          <div class="card-title">
            <h5>Totals</h5>
            <h5>2599dh</h5>
          </div>
          <button type="submit" name="passerCommand" class="btn btn-primary">Passer a la caisse</a>
        </div>
      </div>
      </form>
    </section>
  </section>

    </main>










    
</body>
</html>
<script>
               const plus = document.querySelector(".plus"),
                minus = document.querySelector(".minus"),
                num = document.querySelector(".num");
                let a = 1;
                plus.addEventListener("click", ()=>{
                  a++;
                  a = (a < 10) ? "0" + a : a;
                  num.innerText = a;
                });

                minus.addEventListener("click", ()=>{
                  if(a > 1){
                    a--;
                    a = (a < 10) ? "0" + a : a;
                    num.innerText = a;
                  }
                });

              </script>






