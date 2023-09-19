<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Tabla de clientes</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Inicio</a></li>
              <li class="breadcrumb-item active">DataTables</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">


            <div class="card">
              <div class="card-header">                

                <a href="<?php echo base_url(); ?>index.php/producto/agregarlte">
				        <button type="button" class="btn btn-primary" >Crear clientes <span class="glyphicon glyphicon-plus"></span><i class="fa fa-plus"></i></button>
               
			          </a>

			          <a href="<?php echo base_url(); ?>index.php/cliente/deshabilitadoslte">
				        <button type="button" class="btn btn-warning">Ver lista deshabilitados</button>
			          </a>
                

                <a href="<?php echo base_url(); ?>index.php/usuarios/logout">
				        <button type="button" class="btn btn-danger">Cerrar sesion</button>
			          </a> 

              <br>  

              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Nombre</th>
                    <!-- <th>Apellido P.</th> 
                    <th>Apellido M.</th>--> 
                    <th>descripcion</th> 
                    <th>precio</th>                    
                    <th>stock</th>     
                    <th>Fecha registro</th>
                    <th>Modificar</th>                                 
                  
                  </tr>
                  </thead>
                  <tbody>

            <?php 
				    $indice=1;
				    foreach ($productos->result() as $row) 
				    {
					  ?>
                  <tr>
                    <td><?php echo $indice; ?></td>                 
							      <td><?php echo $row->nombre; ?></td> 							     
							      <td><?php echo $row->descripcion; ?></td>
                    <td><?php echo $row->precio; ?></td>
                    <td><?php echo $row->stock; ?></td>
                

                    <td>
								        <?php //formulario modificar
								        //envia datos hasta agregarbd
								        echo form_open_multipart('producto/modificarlte'); //envia hasta el comtrolador cliente y a su metodo modificasr  
								        ?>
								        	<!-- -->
								        	<input type="hidden" name="idproducto" value="<?php echo $row->idproducto; ?>">
								        	<button type="submit" class="btn btn-success"><i class="fa fa-edit "></i></button>

								        <?php 
								        echo form_close(); //sierra el echo form_open
								        ?>
                        <?php 
								        //envia datos hasta agregarbd
								        echo form_open_multipart('producto/eliminarbdlte');
								        ?>
								        	<!-- ocultamos el id en type -- hidden -->
								        	<input type="hidden" name="idproducto" value="<?php echo $row->idproducto; ?>">
								        	<button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button>

								        <?php 
								        echo form_close();
								        ?>
                          <?php 
								        	//envia datos hasta agregarbd
								        	echo form_open_multipart('producto/deshabilitarbdlte');
								        ?>
								        	<!-- ocultamos el id en type -- hidden -->
								        	<input type="hidden" name="idproducto" value="<?php echo $row->idproducto; ?>">
								        	<button type="submit" class="btn btn-warning"><i class="fa fa-sharp fa-solid fa-eye-slash fa-beat"></i></button>

								        <?php 
								        echo form_close();
								        ?>               

                        
							      </td>              

                   

                  

                    <td>
                     <!-- foto-->
                    </td>

                  </tr>
                  <?php
					  $indice++;
				    }				
				    ?>
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>No</th>
                    <th>Nombre</th>
                    <!-- <th>Apellido P.</th> 
                    <th>Apellido M.</th>--> 
                    <th>descripcion</th> 
                    <th>precio</th>                    
                    <th>stock</th>     
                    <th>Fecha registro</th>
                    <th>Modificar</th>  
                  </tr>                  
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->



