@extends('master.master')

@section('css')
    <style>
        #tree {
          width: 100%;
          height: 100%;
          position: relative;
        }
    </style>
@endsection

@section('content')

    <section>
        <h1>Index OrgChart</h1>
        <div id="tree"></div>

    </section>

@section('js')
<script src="https://balkangraph.com/js/latest/OrgChart.js"></script>
  <script type="text/javascript">

    // var editForm = function () {
        
    // };

    // editForm.prototype.init = function (obj) {
    //     ...
    // };

    // editForm.prototype.show = function (node) {
    //     ...
    // };

    // editForm.prototype.hide = function (showldUpdateTheNode) {
    //     ...
    // };
    OrgChart.templates.ana.link = '<path stroke-linejoin="round" stroke="#aeaeae" stroke-width="1px" fill="none" d="{curve}" />';
    var chart = new OrgChart(document.getElementById("tree"), {
        // editUI: new editForm(),
        mouseScrool: OrgChart.action.none,
        nodeMouseClick: OrgChart.action.edit,
        enableDragDrop: true,
        nodeBinding: {
            field_0: "name",
            field_1: "title",
            field_2: "id",
            field_3: "pid",
            img_0: "img"
        },
        nodes: [
            { id: "1", tags: ["Management"], name: "Amber McKenzie", title: "CEO", img: "https://cdn.balkan.app/shared/1.jpg" },
            { id: "2", pid: "1", tags: ["IT Manager"], name: "Ava Field", title: "IT Manager", img: "https://cdn.balkan.app/shared/2.jpg" },
            { id: "3", pid: "1", tags: ["Marketing Manager"], name: "Rhys Harper", title: "Marketing Team Lead", img: "https://cdn.balkan.app/shared/3.jpg" },
            { id: "4", pid: "2", tags: ["IT"], name: "Carol Foster", title: "Junior Developer", img: "https://cdn.balkan.app/shared/4.jpg" },
            { id: "5", pid: "2", tags: ["IT"], name: "Blake Morris", title: "Senior Developer", img: "https://cdn.balkan.app/shared/5.jpg" },
            { id: "6", pid: "3", tags: ["Marketing"], name: "Erin Grant", title: "Junior Marketing", img: "https://cdn.balkan.app/shared/6.jpg" },
            { id: "7", pid: "3", tags: ["Marketing"], name: "Avery Hughes", title: "Senior MArketing", img: "https://cdn.balkan.app/shared/7.jpg" }

        ]
    });

  </script>
@endsection
@endsection
