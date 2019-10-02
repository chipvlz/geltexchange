<section class="py-3 my-3">
  <div class="container box-shadow p-3">
    <div class="faq-page" style="min-height: 300px">
      <div class="accordion">
          <div id="accordion" class="panel-group text-center">
              <h2 class="title"><a href="" class="btn btn-success">Tutorials</a></h2>
          </div>
         <?php foreach ($info as $var): ?>
            <div class="panel panel-default panel-faq box-shadow p-2">
                <div class="panel-heading">
                  <a data-toggle="collapse" data-parent="#accordion" href="#faq-<?php echo $var->id ?>">
                  <p class="panel-title">
                    <?php echo $var->title ?>
                  <span class="pull-right"><i class="fa fa-plus"></i></span></p></a>
                </div>
                <div id="faq-<?php echo $var->id ?>" class="panel-collapse collapse collapse">
                    <div class="panel-body">
                      <?php echo $var->content ?>
                    </div>
                </div>
            </div>
        <?php endforeach ?>
      </div>
    </div>
  </div>
</section>