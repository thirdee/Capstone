<?php if($this->session->flashdata('success')): ?>
  <script>alert('Cleared');</script>
<?php endif; ?>

<body class="hold-transition skin-red sidebar-mini">
<div class="wrapper">

   <?php $this->load->view('captain/nav_view'); ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <i class="fa fa-list"> </i> LISTS OF <?= $title ?> REQUEST<small></<small>
        </h1>
        <br/><br/>
      <table class="table table-hover">
      <thead>

          <!-- <th>FORM ID</th>
          <th>RESIDENT ID</th> -->
          <th>RESIDENT NAME</th>
          <!-- <th>FORM TYPE</th> -->
          <th>STATUS</th>
          <th>DATE REQUESTED</th>
          <th>VIEW REQUEST</th>
          
        
      </thead>
      <tbody>
      <?php foreach($items as $row): ?>

          <tr>
           <!--  <td><?php echo $row->requests_forms_id; ?></td>
            <td><?php echo $row->resident_id; ?></td> -->
            <td> <?php echo "{$row->firstname} {$row->lastname}"?></td>
            <!-- <td><?php echo $row->requests_forms_type; ?></td> -->

            <?php if($row->request_status == 'paid') ?>

                <td>
                    <button type="button" class="btn btn-primary btn-flat btn-sm" style="text-transform: uppercase;">
                        <?php echo $row->request_status; ?>&nbsp;&nbsp;<i class="fa fa-check-square"></i>
                    </button>
                </td>

                <td>
                    <?php echo date("F d, Y", strtotime($row->requests_created)); ?>
                </td>

                <td>
                    <a href = "<?= base_url('Captain_listing/view_form').'/'.$row->requests_forms_id.'/'.$this->input->get('form_id')?>"><img src=<?= base_url('assets/dist/img/view.png') ?> height=30px> </a>
                </td>
                  
   
          </tr> 
      
          <?php endforeach; ?>
      
      </tbody>
       
      </table> 
    </section>

    <pre class="hidden">
      <?php print_r($requests_pendings)?>
    </pre>

  </div>
<!-- ./wrapper -->

