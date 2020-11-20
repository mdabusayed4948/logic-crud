<?php
include "inc/header.php";


?>

<br><br>
<div class="row">

<div class="col-md-8">

<div class="card">
    <div class="card-header">Form Data</div>
    <div class="card-body" >
    <form id="message_form">
        
        <div class="form-group row">
            <label for="longname" class="col-sm-2 col-form-label">Category Name</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" id="longname" disabled>
            <input type="hidden" class="form-control" name="longname" id="hidelongname">
            <input type="hidden" id="idLogic" name="idLogic">
            </div>
        </div>
        <div class="form-group row">
            <label for="shortname" class="col-sm-2 col-form-label">Short Name</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" name="shortname" id="shortname" >
            </div>
        </div>
        <div class="form-group row">
            <label for="description" class="col-sm-2 col-form-label">Description</label>
            <div class="col-sm-10">
            <textarea name="description" id="description" class="form-control"></textarea>
            </div>
        </div>
        <div class="form-group row">
            <label for="description" class="col-sm-2 col-form-label"></label>
            <div class="col-sm-10">
            <button type="submit" name="submit" id="btnAdd" class="btn btn-info">Save</button>
            <button type="reset"  class="btn btn-primary">Refresh</button>
            <button type="submit" name="submit" id="btnEdit" class="btn btn-info" >Update</button>
            <button type="submit" name="submit" id="btnDelete" class="btn btn-danger"  >Delete</button>
            </div>
        </div>
        
    </form>  

    
    </div>
</div>

</div>


<div class="col-md-4">
    <div class="card">
        <div class="card-header">Main Category</div>
        <div class="card-body">
        <table class="table table-bordered text-center tables">
        
            <tbody>
            <?php 
                $datas = array("data one","data two","data three","data four","data five");
        

                foreach ($datas as $key => $data) { ?>
                <tr>
                    <td class="appendCategory" style="cursor: pointer;" idCategory="<?php echo $data;?>" ><?php echo $data;?></td>
                    
                </tr>
                <?php }?>
                
            

            </tbody>
        </table>
        </div>
    </div>

</div>

</div>
<br>
<div class="row">
    <div class="col-md-12">
    <div class="card">
    <div class="card-header">
    Data List
    </div>
    <div class="card-body">
    <table class="table table-bordered table-hover text-center tables dt-responsive" id="myTable">
        <thead>
            <tr>
                <th>#</th>
                <th>Category</th>
                <th>Short Name</th>
                <th>Description</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
            <th>#</th>
            <th>Category</th>
            <th>Short Name</th>
            <th>Description</th>
            <th>Actions</th>
            </tr>
        </tfoot>
    </table>
    </div>
</div>
    </div>
</div>


<?php 
include "inc/footer.php";
?>