<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<link rel="stylesheet" 
href="https://cdn.datatables.net/1.10.2/css/jquery.dataTables.min.css">
<script type="text/javascript" 
src="https://cdn.datatables.net/1.10.2/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" 
src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<main id="main">
   <div class="container">
              <div class="card-body"><div class="table-responsive">
                <table id="myTable" class="display table" width="100%" >
                  <thead>
                  <tr>
                    <th>Name</th>
                    <th>Mobile</th>
                    <th>Email</th>
                    <th>Location</th>
                    <th>Project</th>
                    <th>Added On</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($users as $users) {
                     ?>
                      <tr>
                      <td><?php echo $users['name']; ?></td>
                      <td><?php echo $users['mobile']; ?></td>
                      <td><?php echo $users['email']; ?></td>
                      <td><?php echo $users['location']; ?></td>
                      <td><?php echo $users['project']; ?></td>
                      <td><?php echo $users['added_on']; ?></td>
                     
                  </tr>
                    <?php   } ?>
                 
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          </main>
           
  <script>
$(document).ready(function(){
    $('#myTable').dataTable();
});
</script>