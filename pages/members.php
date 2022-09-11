<h1>Tous les membres</h1>
<hr>

<div class="row">
  
    <div class="col m12">
        <!-- <div class="col m6 s12"> -->
        <table>
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Email</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
             <?php 
             
               $members = get_members();

               foreach ($members as $member) {
                ?>
  
                          <tr>
                            <td style="display: flex; align-items: center;">
                                <div>
                                  <i class="material-icons">persone</i>
                                </div>
                                <p class="waves-effect waves-light">
                                   <?= $member->name ?>
                                </p>
                            </td>

                            <td>
                                <div>
                                  <i class="material-icons">markunread</i>
                                </div>
                                <p class="waves-effect waves-light">
                                   <?= $member->email ?>
                                </p>
                            </td>
                             
                            <td>
                                <a href="index.php?page=tchat&id=<?= $member->id?>" class="waves-effect waves-light">
                                  <i class="material-icons">chat</i>
                                </a>
                            </td>
                          </tr>
                        <?php
                        }
                   ?>
                
           
            </tbody>
        </table>

    </div>
</div>