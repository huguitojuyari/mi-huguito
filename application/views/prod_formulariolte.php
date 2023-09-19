  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Lista productos</h1>
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
                <h3 class="card-title">Agregar nuevo productos</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              
              
			  <?php 
			//envia datos hasta agregarbd
			echo form_open_multipart('producto/agregarbdlte');
			?>      
               
                
                <div class="card-body">
                  <div class="form-group">
                    <label for="" >Nombre</label>
                    <input type="text" class="form-control" name="nombre" placeholder="Escrib el nombre producto">
                  </div>
                  

                  
				         <div class="form-group">
                    <label for="">descripcion</label>
                    <input type="text" class="form-control" name="descripcion" placeholder="Escriba la descripcion">
                  </div>
                  
                
				         <div class="form-group">
                    <label for="">precio</label>
                    <input type="text" class="form-control" name="precio" placeholder="Escriba precio">
                  </div>
                
                
                  

                  <div class="col-4"> 
                  <div class="form-group">
                    <label for="">stock</label>
                    <input type="pastext" class="form-control" name="stock" placeholder="Escriba la cantidad">
                  </div> 
                  </div>
                   
                
                <!-- /.form-group -->
                    </div>                 
                  
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Agregar</button>
                </div>
              
			  <?php 
			echo form_close();
			?>
            </div>

          </div>        
        </div>       
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
