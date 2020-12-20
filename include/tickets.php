<?php

?>

<div id="toolbar">
  <button id="button" class="btn btn-secondary">See more...</button>
</div>
<table
  id="table" class="my-special-table"
  data-toolbar="#toolbar"
  data-search="true"
  data-show-refresh="true"
  data-show-toggle="true"
  data-show-fullscreen="true"
  data-show-columns="true"
  data-show-columns-toggle-all="true"
  data-detail-view="true"
  data-show-export="true"
  data-click-to-select="true"
  data-detail-formatter="detailFormatter"
  data-minimum-count-columns="2"
  data-show-pagination-switch="true"
  data-pagination="false"
  data-id-field="id"
  data-page-list="[10, 25, 50, 100, all]"
  data-show-footer="true"
  data-url=""
  data-response-handler="responseHandler">
  <thead class="my-bg-dark">
    <tr>
      <th data-field="id">ID</th>
      <th data-field="name">Item Name</th>
      <th data-field="price">Item Price</th>
    </tr>
  </thead>
</table>
</table>

  </tbody>
</table>



<script>


function randomData() {
    var startId = ~~(Math.random() * 100)
    var rows = []

    for (var i = 0; i < 10; i++) {
      rows.push({
        id: startId + i,
        name: 'test' + (startId + i),
        price: '$' + (startId + i)
      })
    }
    return rows
  }
  $(function(){


  $('#table').bootstrapTable({locale:'en-US',data:randomData()});
$("#button").click(function(){
    var randomData1 = randomData();
    alert("Helloo" + JSON.stringify(randomData1));
    
    $('#table').bootstrapTable('append',randomData1);
    $('#table').bootstrapTable('refresh');
    $('#table').bootstrapTable('scrollTo', 'bottom');

    //randomData=[];
//alert("Helloo222" );
});
});
</script>