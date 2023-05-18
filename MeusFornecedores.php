<h1> Conheça nossos Fornecedores </h1>

<?php 
   $sql = "SELECT * FROM fornecedores";
   
   $res = $conn->query($sql);

   $qtd = $res->num_rows;

   if($qtd > 0 ){
    print "<table class='table table-striped-columns table-bordered table-hover'>";
        print "<tr>";
        print "<th>#</th>";
        print "<th>Nome</th>";
        print "<th>ramo</th>";
        print "<th>Contato</th>";
    while($row = $res->fetch_object()){
        print "<tr>";
        print "<td>".$row->id."</td>";
        print "<td>".$row->razaosocial."</td>";
        print "<td>".$row->ramo."</td>";
        print "<td>
          
        <button type='button' class='btn btn-outline-success'>WhatsApp</button>
        
        </td>";
        print "<tr>";
    }
    print "</table>";

   }else{
       print "<p class = 'alert alert-danger'> Não encontramos resultados!</p>";
   }
?>
