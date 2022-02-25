<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<?php  include(VIEWS.'inc/header.php'); ?>


    <div class="container">
      <div class="row">
      <h1 class="text-center my-5 py-3">List of Product</h1>
        <div class="col-8 mx-auto">
          <table class="table">
            <thead class="thead-dark">
              <tr>
                <th scope="col">#</th>
                <th scope="col">Reference</th>
                <th scope="col">Nom</th>
                <th scope="col">Descriptions</th>
                <th scope="col">Prix</th>
                <th scope="col">Quantity</th>
                <th scope="col">Categorie</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
              </tr>
            </thead>
            <tbody>

            <?php $i=1; ?>
            <?php foreach($products as $row){ ?>
              <tr>
                <td> <?php echo $i; $i++; ?> </td>
                <td> <?php echo $row['reference']; ?> </td>
                <td> <?php echo $row['nom']; ?> </td>
                <td class="text-center"><?php echo $row['descriptions']; ?></td>
                <td> <?php echo $row['prix']; ?> </td> <b class="float-right"></b>
                <td><?php echo $row['quantite']; ?></td>
                <td><?php echo $row['categorie']; ?></td>

                <td>
                  <a href="<?php url('/products/UpdateProduct/'.$row['id_p']) ?>" class="btn btn-info">Edit</a>
               </td>
                <td>
                <a href="<?php url('/products/DeleteProduct/'.$row['id_p']) ?>" class="btn btn-danger">Delete</a>
                </td>
              </tr>
             Z
            </tbody>
          </table>
        </div>
      </div>
    </div>

