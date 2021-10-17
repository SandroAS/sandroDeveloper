@extends('master.master')

@section('css')
    <style>
        #chart-container {
            position: relative;
            height: 100;
            border: 1px solid #aaa;
            margin: 0.5rem;
            overflow: auto;
            text-align: center;
        }
        .orgchart { background: #fff; }
    </style>
@endsection

@section('content')

    <section>
        <h1>Index OrganizationChart</h1>
        <div id="chart-container"></div>
        <div id="chart-container2"></div>

    </section>

@section('js')
<script type="text/javascript">
    $(function() {

    var datascource = {
      'name': 'Lao Lao',
      'title': 'general manager',
      'children': [
        { 'name': 'Bo Miao', 'title': 'department manager' },
        { 'name': 'Su Miao', 'title': 'department manager',
          'children': [
            { 'name': 'Tie Hua', 'title': 'senior engineer' },
            { 'name': 'Hei Hei', 'title': 'senior engineer',
              'children': [
                { 'name': 'Pang Pang', 'title': 'engineer' },
                { 'name': 'Xiang Xiang', 'title': 'UE engineer' }
              ]
            }
          ]
        },
        { 'name': 'Yu Jie', 'title': 'department manager' },
        { 'name': 'Yu Li', 'title': 'department manager' },
        { 'name': 'Hong Miao', 'title': 'department manager' },
        { 'name': 'Yu Wei', 'title': 'department manager' },
        { 'name': 'Chun Miao', 'title': 'department manager' },
        { 'name': 'Yu Tie', 'title': 'department manager' }
      ]
    };

    var oc = $('#chart-container').orgchart({
      'data' : datascource,
      'nodeContent': 'title',
      'pan': true,
      'zoom': true
    });

    oc.$chartContainer.on('touchmove', function(event) {
      event.preventDefault();
    });

    

    //-----------------------------------------------------------------

    var oc = $('#chart-container2').orgchart({
      'data' : datascource,
      'nodeContent': 'title',
      'draggable': true,
      'dropCriteria': function($draggedNode, $dragZone, $dropZone) {
        if($draggedNode.find('.content').text().indexOf('manager') > -1 && $dropZone.find('.content').text().indexOf('engineer') > -1) {
          return false;
        }
        return true;
      }
    });

    oc.$chart.on('nodedrop.orgchart', function(event, extraParams) {
      console.log('draggedNode:' + extraParams.draggedNode.children('.title').text()
        + ', dragZone:' + extraParams.dragZone.children('.title').text()
        + ', dropZone:' + extraParams.dropZone.children('.title').text()
      );
    });

    //-------------------------------------------------------------

    $(window).resize(function() {
      var width = $(window).width();
      if(width > 576) {
        oc.init({'verticalLevel': undefined});
      } else {
        oc.init({'verticalLevel': 2});
      }
    });

  });
  </script>
@endsection
@endsection
