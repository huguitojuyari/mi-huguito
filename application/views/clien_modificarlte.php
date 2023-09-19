<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Modificar Clientes</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">General Form</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Lista clientes</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              
			  <?php 
			foreach ($infocliente->result() as $row) //inicio de la recursividad
			{

			
			//envia datos hasta agregarbd
			echo form_open_multipart('cliente/modificarbdlte');
			?>
                <div class="card-body">
					
                  <div class="form-group">
				  <input type="hidden" name="idcliente" class="form-control" value="<?php echo $row->idcliente; ?>">
                    <label for="">Nombre</label>					
                    <input type="text" name="nombre" placeholder="Escriba el nombre" class="form-control" value="<?php echo $row->nombre; ?>">
                  </div>
				  <div class="form-group">
                    <label for="">Apellido Paterno</label>
                    <input type="text" name="apellido1" placeholder="Escriba el primer apellido" class="form-control" value="<?php echo $row->primerApellido; ?>">
                  </div>
				  <div class="form-group">
                    <label for="">Apellido Materno</label>
                    <input type="text" name="apellido2" placeholder="Escriba el segundo apellido" class="form-control" value="<?php echo $row->segundoApellido; ?>">
                  </div>
                  <div class="form-group">
                    <label>Carnet</label>
                    <input type="text" name="ci" placeholder="Escriba la ci" class="form-control" value="<?php echo $row->ci; ?>">
                  </div> 
                  <!-- <div class="form-group">
                    <label>Talla</label>
                    <input type="text" name="talla" placeholder="Escriba la tala" class="form-control" value="<?php echo $row->talla; ?>">
                  </div>   -->
                  <div class="col-4">
                           <!-- /.form-group -->
                      <div class="form-group">
                        <label>Talla</label>
                        <select id="recuerdo" name="talla" class="form-control select2" style="width: 100%;">
                          <option selected="selected">talla M</option>
                          <option value="talla L">talla L</option>
                          <option value="talla xl">talla xl</option>
                          <option value="talla 14">talla 14</option>
                          <option value="talla 12">talla 12</option>
                          <option value="talla 10">talla 10</option>
                          <option value="talla 8">talla 8</option>
                          <option value="talla 6">talla 6</option>
                          <option value="talla 4">talla 4</option>
                        </select>
                </div>
                <!-- /.form-group -->
                    </div>             
                  
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">MODIFICAR</button>
                </div>
               
              
				<?php 
			echo form_close();
			}
			?>
            </div>

          </div>        
        </div>       
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
