@extends('master.master')

@section('css')
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #000C0E;
    }
  </style>
  <style>
    .btn {

      margin: 3px;
      color: inherit;
      text-transform: uppercase;
      word-wrap: break-word;
      white-space: normal;
      cursor: pointer;
      border: 0;
      border-radius: .125rem;
      -webkit-box-shadow: 0 2px 5px 0 rgb(0 0 0 / 16%), 0 2px 10px 0 rgb(0 0 0 / 12%);
      box-shadow: 0 2px 5px 0 rgb(0 0 0 / 16%), 0 2px 10px 0 rgb(0 0 0 / 12%);
      -webkit-transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
      transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
      transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
      transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
      padding: .84rem 2.14rem;
      font-size: .81rem;
      display: inline-block;
      font-weight: 400;
      color: #212529;
      text-align: center;
      vertical-align: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none;
      border: 1px solid transparent;
      padding: .375rem .75rem;
      font-size: 1rem;
      line-height: 1.5;
      border-radius: .25rem;
    }

    .btn-action-button {
      text-transform: lowercase;
      font-size: 11px !important;
      border-radius: 7px !important;
      color: white !important;
      padding: 4px 5px !important;
      background-color: #1d2643 !important;
    }

    .action-buttons {
      position: absolute;
      bottom: 10px;
      right: 35px;
    }

    .svg-chart-container:before {
      content: "";
      position: absolute;
      left: 0;
      right: 0;
      top: 0;
      bottom: 0;
      background: radial-gradient(circle at center, #04192B 0, #000B0E 100%)
    }
  </style>
@endsection

@section('content')

    <section>
        <h1>Index D3-Org-Chart</h1>
        <div class="chart-container"></div>
        <div class="action-buttons">
          <button onclick='chart.setExpanded("O-6164").render()' class="btn btn-action-button waves-effect waves-light"><i
                      class="fas fa-chevron-down"></i> Expand </button>
          <br>
      
      
          <button onclick='chart.setExpanded("O-6164",false).render()'
                  class="btn btn-action-button waves-effect waves-light"><i class="fas fa-chevron-up"></i>
                  Collapse</button><br>
      
      
          <button
                  onclick='chart.addNode({imageUrl:"https:\/\/raw.githubusercontent.com/bumbeishvili/Assets/master/Projects/D3/Organization%20Chart/cto.jpg",id:"root child",parentId:"O-6066",name:"test",progress:[25,20,15,10]})'
                  class="btn btn-action-button waves-effect waves-light"><i class="fas fa-folder-plus"></i> Add Node</button>
          <br />
      
      
          <button onclick='chart.removeNode("O-6067")' class="btn btn-action-button waves-effect waves-light"><i
                      class="fas fa-user-times"></i> remove</button><br>
      
          <button onclick="chart.fit()" class="btn btn-action-button waves-effect waves-light"><i class="fas fa-sync"></i>
                        fit</button>
          <br>
      
          <button onclick='chart.layout(["right","bottom","left","top"][index++%4]).render().fit()'
                  class="btn btn-action-button waves-effect waves-light"><i class="fas fa-retweet"></i> swap </button>
          <br />
      
          <button onclick='chart.compact(!!(compact++%2)).render().fit()'
          class="btn btn-action-button waves-effect waves-light"><i class="fas fa-sitemap"></i> compact </button>
          <br />
      
          <button onclick='chart.setActiveNodeCentered(!!(actNdCent++%2)).render()'
          class="btn btn-action-button waves-effect waves-light"><i class="fas fa-border-none"></i> center Active </button>
          <br />
      
      
      
          <button onclick='chart.setCentered("O-6162").render()' class="btn btn-action-button waves-effect waves-light"><i
                      class="fas fa-compress-arrows-alt"></i> center</button>
          <br>
          <button onclick='chart.setHighlighted("O-6162").render()'
                  class="btn btn-action-button waves-effect waves-light"><i class="fas fa-highlighter"></i> mark</button><br>
          <button onclick='chart.setUpToTheRootHighlighted("O-6162").render().fit()'
                  class="btn btn-action-button waves-effect waves-light"><i class="fas fa-route"></i> mark root</button>
          <br />
          <button onclick="chart.clearHighlighting()" class="btn btn-action-button waves-effect waves-light"><i
                      class="fas fa-eraser"></i> clear mark</button>
          <br>
          <button onclick="chart.fullscreen('body')" class="btn btn-action-button waves-effect waves-light"><i
                      class="fas fa-expand"></i> fullscreen</button><br>
      
          <button onclick="chart.exportImg()" class="btn btn-action-button waves-effect waves-light"><i
                      class="far fa-images"></i> export img</button>
          <br />
      
          <button onclick="chart.exportImg({full:true})" class="btn btn-action-button waves-effect waves-light"><i
            class="far fa-images"></i> export full img</button>
          <br />
      
          <button onclick="chart.exportSvg()" class="btn btn-action-button waves-effect waves-light"><i
                      class="fas fa-file-download"></i> export svg</button>
          <br>
          <button onclick="chart.expandAll()" class="btn btn-action-button waves-effect waves-light"><i
                      class="fas fa-angle-double-down"></i> expand all</button><br>
      
          <button onclick="chart.collapseAll()" class="btn btn-action-button waves-effect waves-light"><i
            class="fas fa-angle-double-up"></i> collapse all</button><br>
      
          <button onclick="downloadPdf()" class="btn btn-action-button waves-effect waves-light"><i
                        class="far fa-file-pdf"></i> export pdf</button>
          <br />
      
          <button onclick='chart.connections([{from:"O-6069",to:"O-6070",label:"Conflicts of interest"}]).render()'
                  class="btn btn-action-button waves-effect waves-light"><i class="fas fa-project-diagram"></i> add
                  link</button>
          <br />
      
          <button onclick="chart.zoomOut()" class="btn btn-action-button waves-effect waves-light"><i
                      class="fas fa-minus"></i> zoom out</button><br>
          <button onclick="chart.zoomIn()" class="btn btn-action-button waves-effect waves-light"><i
                      class="fas fa-plus"></i> zoom in</button>
          <br />
        </div>

    </section>

@section('js')
<script src="https://d3js.org/d3.v7.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/d3-org-chart@2"></script>
<script src="https://cdn.jsdelivr.net/npm/d3-flextree@2.0.0/build/d3-flextree.js"></script>
  <script type="text/javascript">

class PieChart {
  // ================. BASE SETUP. ==============
  constructor() {
    const attrs = {
      id: 'ID' + Math.floor(Math.random() * 1000000),
      svgWidth: 400,
      svgHeight: 400,
      marginTop: 75,
      image: '',
      marginBottom: 75,
      marginRight: 105,
      marginLeft: 105,
      container: 'body',
      defaultFontSize: 12,
      percentCircleRadius: 14,
      labelMargin: 10,
      defaultTextFill: '#6F68A7',
      backCircleColor: '#EAF0FB',
      defaultFont: 'Helvetica',
      valueAccessor: d => d.value,
      round: (d, sum) => Math.round((d.data.value / sum) * 100),
      groupingText: `Count`,
      valueFormat: d => d3.format('.3s')(d),
      ctx: document.createElement('canvas').getContext('2d'),
      dimension: null,
      group: null,
      data: null,
      tooltip: (event, d) => {
        let items = d.data.items;
        if (!items) items = [{ key: d.data.key, value: d.data.value }];
        return `
      <table style="font-size:12px">
<tr><th>Name</th><th>Value</th></tr>
        ${items
          .map(
            t =>
              `<tr><td style="padding-right:20px;">${t.key}</td><td>${
                t.value
              }</td></tr>`
          )
          .join('')}
      </table>
    `;
      },
      setData: state => {
        if (!state.group) return state.data;
        const dt = state.group.all();
        dt.sort((a, b) => (a.value > b.value ? -1 : 1));
        return dt;
      }
    };

    // Inner state props
    Object.assign(attrs, {
      calc: null,
      svg: null,
      chart: null,
      pie: null,
      arc: null,
      arcOuter: null
    });

    this.getState = () => attrs;
    this.setState = d => Object.assign(attrs, d);
    Object.keys(attrs).forEach(key => {
      //@ts-ignore
      this[key] = function(_) {
        var string = `attrs['${key}'] = _`;
        if (!arguments.length) {
          return eval(`attrs['${key}'];`);
        }
        eval(string);
        return this;
      };
    });
    this.initializeEnterExitUpdatePattern();
  }

  initializeEnterExitUpdatePattern() {
    d3.selection.prototype.patternify = function(params) {
      var container = this;
      var selector = params.selector;
      var elementTag = params.tag;
      var data = params.data || [selector];
      // Pattern in action
      var selection = container.selectAll('.' + selector).data(data, (d, i) => {
        if (typeof d === 'object') {
          if (d.id) {
            return d.id;
          }
        }
        return i;
      });
      selection.exit().remove();
      selection = selection
        .enter()
        .append(elementTag)
        .merge(selection);
      selection.attr('class', selector);
      return selection;
    };
  }

  // ================== RENDERING  ===================
  render() {
    this.setDataProp();
    this.setDynamicContainer();
    this.calculateProperties();
    this.drawSvgAndWrappers();
    this.setLayouts();
    this.drawSlices();
    this.drawCenterTexts();
    this.attachEventHandlers();
    return this;
  }

  setDataProp() {
    const data = this.getData();
    this.setState({ data });
  }

  drawCenterTexts() {
    const {
      data,
      centerPoint,
      calc,
      defaultTextFill,
      valueFormat,
      centerText,
      groupingText,
      image,
      backCircleColor
    } = this.getState();
    const sum = d3.sum(data, d => d.value);
    const fo = centerPoint
      .patternify({ tag: 'foreignObject', selector: 'center-for-text' })
      .attr('pointer-events', 'none')
      .attr('x', -calc.innerRadius)
      .attr('y', -calc.innerRadius)
      .attr('width', calc.innerRadius * 2)
      .attr('height', calc.innerRadius * 2);

    fo.patternify({ tag: 'xhtml:div', selector: 'for-center-div' })
      .html(`<div style="height:${calc.innerRadius *
      2}px;display:flex;justify-content:center;align-items:center;text-align:center">
             <img height="${calc.innerRadius * 2 -
               20}"  style="border:2px solid ${backCircleColor};border-radius:40px" width="${calc.innerRadius *
      2 -
      20}" src="${image}" />
</div>
          </div>`);
  }

  setLayouts() {
    const { calc } = this.getState();

    const pie = d3
      .pie()
      .value(d => d.value)
      .sort(null);

    const arc = d3
      .arc()
      .innerRadius(calc.innerRadius)
      .outerRadius(calc.radius)
      .padAngle(0.02)
      .cornerRadius(1);

    const arcOuter = d3
      .arc()
      .innerRadius(arc.outerRadius()() + 2)
      .outerRadius(arc.outerRadius()() + 5);

    const arcLabel = d3
      .arc()
      .innerRadius(arcOuter.outerRadius()())
      .outerRadius(arcOuter.outerRadius()() + 30);

    this.setState({ pie, arc, arcOuter, arcLabel });
  }

  attachEventHandlers() {}

  // Calculate what size will text take when drew
  getTextWidth(text, { fontSize = 14, fontWeight = 400 } = {}) {
    const { defaultFont, ctx } = this.getState();
    ctx.font = `${fontWeight || ''} ${fontSize}px ${defaultFont} `;
    const measurement = ctx.measureText(text);
    return measurement.width;
  }

  setDynamicContainer() {
    const attrs = this.getState();

    //Drawing containers
    var container = d3.select(attrs.container);
    var containerRect = container.node().getBoundingClientRect();
    //if (containerRect.width > 0) attrs.svgWidth = containerRect.width;
    this.setState({ container });
  }

  drawSvgAndWrappers() {
    const {
      tooltip,
      container,
      svgWidth,
      svgHeight,
      defaultFont,
      calc
    } = this.getState();

    // Draw SVG
    const svg = container
      .patternify({
        tag: 'svg',
        selector: 'svg-chart-container'
      })
      .attr('width', svgWidth)
      .attr('height', svgHeight)
      .attr('font-family', defaultFont);

    //Add container g element
    var chart = svg
      .patternify({
        tag: 'g',
        selector: 'chart'
      })
      .attr(
        'transform',
        'translate(' + calc.chartLeftMargin + ',' + calc.chartTopMargin + ')'
      );

    const centerPoint = chart
      .patternify({ tag: 'g', selector: 'center-point' })
      .attr(
        'transform',
        'translate(' + calc.chartWidth / 2 + ',' + calc.chartHeight / 2 + ')'
      );

    this.setState({ chart, svg, centerPoint });
  }

  calculateProperties() {
    const attrs = this.getState();

    //Calculated properties
    var calc = {
      id: 'ID' + Math.floor(Math.random() * 1000000), // id for event handlings,
      chartTopMargin: attrs.marginTop,
      chartLeftMargin: attrs.marginLeft,
      chartWidth: null,
      chartHeight: null
    };
    calc.chartWidth = attrs.svgWidth - attrs.marginRight - calc.chartLeftMargin;
    calc.chartHeight =
      attrs.svgHeight - attrs.marginBottom - calc.chartTopMargin;
    calc.radius = Math.min(calc.chartWidth, calc.chartHeight) / 2;
    calc.innerRadius = calc.radius * 0.7;
    if (calc.innerRadius < 100) calc.innerRadius = calc.radius * 0.8;

    this.setState({ calc });
  }

  // =================== API IMPLEMENTATION ===============
  getData() {
    const state = this.getState();
    const { setData } = state;
    return setData(state);
  }

  drawSlices() {
    const {
      round,
      labelMargin,
      defaultFontSize,
      centerPoint,
      pie,
      arc,
      arcOuter,
      backCircleColor,
      arcLabel,
      defaultTextFill,
      tip,
      percentCircleRadius
    } = this.getState();
    const dataInitial = this.getData();
    const sum = d3.sum(dataInitial, d => d.value);
    const minAllowed = 0.04;
    let data = dataInitial.filter(
      dataItem => dataItem.value / sum >= minAllowed
    );
    const others = dataInitial.filter(
      dataItem => dataItem.value / sum < minAllowed
    );
    if (others.length > 1) {
      data.push({
        key: 'Others',
        items: others,
        value: d3.sum(others, d => d.value)
      });
    } else {
      data = dataInitial;
    }

    const pieData = pie(data);
    const right = pieData.filter(d => this.isRightSide(d));
    const left = pieData.filter(d => !this.isRightSide(d));
    pieData.forEach((d, i, arr) => {
      d.xOffset = 0;
      if ((i != 0 && i != arr.length - 1) || arr.length < 20) {
        d.yOffset = 0;
      } else {
        d.yOffset = -30;
      }
    });

    const process = (d, i, arr) => {
      if (i < 1) return;
      const prev = arr[i - 1];
      const curr = d;

      const yPrev = arcLabel.centroid(prev)[1] + prev.yOffset;
      const yCurr = arcLabel.centroid(curr)[1];
      console.log(yPrev, yCurr);
      if (this.isRightSide(curr) && yPrev + percentCircleRadius * 2 > yCurr) {
        console.log('is Righ Side');
        curr.yOffset = yPrev + percentCircleRadius * 2 - yCurr + 2;
      } else if (
        !this.isRightSide(curr) &&
        yPrev + percentCircleRadius * 2 > yCurr
      ) {
        curr.yOffset = yPrev + percentCircleRadius * 2 - yCurr + 2;
        if (arr.length > 4) {
          if (i < 4 + arr.length / 10) {
            //curr.xOffset = -10-arr.length/2*1;
          }
          if (arr.length > 9) {
            curr.xOffset = 0;
          }
        }

        console.log('is not Righ Side', this.isRightSide(curr));
      }
    };
    right.forEach(process);
    left.reverse().forEach(process);

    const that = this;
    centerPoint
      .patternify({
        tag: 'path',
        selector: 'pie-background',
        data: pie([{ value: 1 }])
      })
      .attr('d', arcOuter)
      .attr('fill', backCircleColor);

    const pieG = centerPoint.patternify({
      tag: 'g',
      selector: 'pie-wrapper',
      data: pieData
    });

    pieG
      .patternify({ tag: 'path', selector: 'pie-paths', data: d => [d] })
      .attr('d', arc)
      .attr('cursor', 'pointer')
      .attr('fill', d => that.getColor(d))
      .on('mouseenter.tooltip', function(event, d) {})
      .on('mouseleave.tooltip', function(d) {})
      .on('mouseenter.color', function(event, d) {
        d3.select(this).attr('fill', d3.rgb(that.getColor(d)).darker(0.5));
      })
      .on('mouseleave.color', function(event, d) {
        d3.select(this).attr('fill', that.getColor(d));
      });

    pieG
      .patternify({
        tag: 'polyline',
        selector: 'pie-label-line',
        data: d => [d]
      })
      .attr('points', d => {
        let textWidth =
          this.getTextWidth(d.data.key || '', { fontSize: defaultFontSize }) +
          labelMargin;
        if (this.isRightSide(d)) {
          textWidth = -textWidth;
        }
        return `
    ${arc.centroid(d)[0]},
    ${arc.centroid(d)[1]} 
    ${arcLabel.centroid(this.correct(d))[0] + d.xOffset},
    ${arcLabel.centroid(this.correct(d))[1] + d.yOffset} 
    ${arcLabel.centroid(this.correct(d))[0] - textWidth + d.xOffset},
    ${arcLabel.centroid(this.correct(d))[1] + d.yOffset}
`;
      })
      .attr('stroke', defaultTextFill)
      .attr('fill', 'none')
      .attr('pointer-events', 'none')
      .style('opacity', this.getLabelOpacity);

    pieG
      .patternify({
        tag: 'circle',
        selector: 'pie-center-points',
        data: d => [d]
      })
      .attr('cx', d => arc.centroid(d)[0])
      .attr('cy', d => arc.centroid(d)[1])
      .style('opacity', this.getLabelOpacity)
      .attr('fill', '#FFFFFF')
      .attr('r', 2)
      .attr('pointer-events', 'none');

    pieG
      .patternify({ tag: 'text', selector: 'pie-texts', data: d => [d] })
      .text(d => d.data.key)
      .attr('x', d => {
        let x = arcLabel.centroid(this.correct(d))[0];
        if (this.isRightSide(d)) x += labelMargin - 5;
        else x -= labelMargin - 5;
        return x + d.xOffset;
      })
      .attr('text-anchor', d => {
        if (this.isRightSide(d)) return 'start';
        return 'end';
      })
      .attr('font-size', defaultFontSize)
      .attr('y', d => arcLabel.centroid(this.correct(d))[1] - 4 + d.yOffset)
      .attr('fill', defaultTextFill)
      .style('opacity', this.getLabelOpacity);

    pieG
      .patternify({
        tag: 'text',
        selector: 'pie-percent-texts',
        data: d => [d]
      })
      .text(d => round(d, sum) + '%')
      .attr('alignment-baseline', 'middle')
      .attr('x', d => {
        let textWidth =
          this.getTextWidth(d.data.key || '', { fontSize: defaultFontSize }) +
          labelMargin +
          percentCircleRadius;
        if (this.isRightSide(d)) {
          textWidth = -textWidth;
        }
        return arcLabel.centroid(this.correct(d))[0] - textWidth + d.xOffset;
      })
      .attr('y', d => arcLabel.centroid(this.correct(d))[1] + d.yOffset)
      .attr('text-anchor', 'middle')
      .attr('font-size', 11)
      .attr('fill', defaultTextFill)
      .style('opacity', this.getLabelOpacity);

    pieG
      .patternify({
        tag: 'circle',
        selector: 'pie-percent-circle',
        data: d => [d]
      })
      .attr('stroke', defaultTextFill)
      .attr('r', percentCircleRadius)
      .style('opacity', this.getLabelOpacity)
      .attr('fill', 'none')
      .attr('cx', d => {
        let textWidth =
          this.getTextWidth(d.data.key || '', { fontSize: defaultFontSize }) +
          labelMargin +
          percentCircleRadius;
        if (this.isRightSide(d)) {
          textWidth = -textWidth;
        }
        return arcLabel.centroid(this.correct(d))[0] - textWidth + d.xOffset;
      })
      .attr('cy', d => arcLabel.centroid(this.correct(d))[1] - 1.1 + d.yOffset);

    //  centroid = arcGenerator.centroid(d);
  }

  getLabelOpacity(pieItem) {
    if (Math.abs(pieItem.yOffset) > 130) {
      return 0;
    }
    return 1;
  }
  getColor(d) {
    if (!d.data) {
      debugger;
    }
    return (
      d.data.color ||
      d3.schemeSet2[this.hashCode(d.data.key + '') % d3.schemeSet2.length]
    );
  }
  isRightSide(n) {
    const d = this.correct(n);
    const midAngle = (d.startAngle + d.endAngle) / 2;
    if (midAngle <= Math.PI) return true;
    return false;
  }

  correct(d) {
    return Object.assign({}, d, {
      startAngle: d.startAngle,
      endAngle: d.endAngle
    });
  }
  // Get hashcode from string
  hashCode(s) {
    for (var i = 0, h; i < s.length; i++)
      h = (Math.imul(31, h) + s.charCodeAt(i)) | 0;
    return Math.abs(h);
  }
  // ===================

  // Method which renders initial html elements
  _doRender() {
    this._doRedraw();
    return this;
  }

  // Method which redraws graph after data change
  _doRedraw() {
    if (this.hasFilter() && this._multiple) {
    } else if (this.hasFilter()) {
    } else {
    }
    return this;
  }
}

  </script>

<script>
  var chart;
      d3.csv(
          'https://raw.githubusercontent.com/bumbeishvili/sample-data/main/org.csv'
      ).then(dataFlattened => {

          dataFlattened.forEach(d => {
              const val = Math.round((d.name.length) / 2);
              d.progress = [...new Array(val)].map(d => Math.random() * 25 + 5)
          })
          chart = new d3.OrgChart()
              .container('.chart-container')
              .svgHeight(window.innerHeight - 10)
              .data(dataFlattened)
              .nodeHeight(d => 170)
              .nodeWidth(d => {
                  if (d.depth == 0) return 500;
                  return 330
              })
              .childrenMargin(d => 90)
              .compactMarginBetween(d => 65)
              .compactMarginPair(d => 100)
              .neightbourMargin((a, b) => 50)
              .siblingsMargin(d => 100)
              .buttonContent(({ node, state }) => {
                  return `<div style="color:#2CAAE5;border-radius:5px;padding:3px;font-size:10px;margin:auto auto;background-color:#040910;border: 1px solid #2CAAE5"> <span style="font-size:9px">${node.children ? `<i class="fas fa-angle-up"></i>` : `<i class="fas fa-angle-down"></i>`}</span> ${node.data._directSubordinates}  </div>`
              })
              .linkUpdate(function (d, i, arr) {
                  d3.select(this)
                      .attr("stroke", d => d.data._upToTheRootHighlighted ? '#14760D' : '#2CAAE5')
                      .attr("stroke-width", d => d.data._upToTheRootHighlighted ? 15 : 1)

                  if (d.data._upToTheRootHighlighted) {
                      d3.select(this).raise()
                  }
              })
              .nodeContent(function (d, i, arr, state) {
                  const svgStr = `<svg width=150 height=75  style="background-color:none"> <path d="M 0,15 L15,0 L135,0 L150,15 L150,60 L135,75 L15,75 L0,60" fill="#2599DD" stroke="#2599DD"/> </svg>`
                  return `
                        <div class="left-top" style="position:absolute;left:-10px;top:-10px">  ${svgStr}</div>
                        <div class="right-top" style="position:absolute;right:-10px;top:-10px">  ${svgStr}</div>
                        <div class="right-bottom" style="position:absolute;right:-10px;bottom:-14px">  ${svgStr}</div>
                        <div class="left-bottom" style="position:absolute;left:-10px;bottom:-14px">  ${svgStr}</div>
                        <div style="font-family: 'Inter'; background-color:#040910;sans-serif; position:absolute;margin-top:-1px; margin-left:-1px;width:${d.width}px;height:${d.height}px;border-radius:0px;border: 2px solid #2CAAE5">
                           
                           <div class="pie-chart-wrapper" style="margin-left:-10px;margin-top:5px;width:320px;height:300px"></div>
                         
                          <div style="color:#2CAAE5;position:absolute;right:15px;top:-20px;">
                            <div style="font-size:15px;color:#2CAAE5;margin-top:32px"> ${d.data.name} </div>
                            <div style="font-size:10px;"> ${d.data.positionName || ''} </div>
                            <div style="font-size:10px;"> ${d.data.id || ''} </div>
                            ${d.depth == 0 ? `                              <br/>
                            <div style="max-width:200px;font-size:10px;">
                              A corporate history of Ian is a chronological account of a business or other co-operative organization he founded.  <br><br>Usually it is produced in written format but it can also be done in audio or audiovisually  
                            </div>`: ''
                      }

                          </div>

                          <div style="position:absolute;left:-5px;bottom:10px;">
                            <div style="font-size:10px;color:#2CAAE5;margin-left:20px;margin-top:32px"> Progress </div>
                            <div style="color:#2CAAE5;margin-left:20px;margin-top:3px;font-size:10px;"> 
                              <svg width=150 height=30> ${d.data.progress.map((h, i) => { return `<rect  width=10 x="${i * 12}" height=${h}  y=${30 - h} fill="#B41425"/>` }).join('')}  </svg>
                              </div>
                          </div>
                        </div>
                        
`;
              })
              .nodeUpdate(function (d, i, arr) {
                  d3.select(this)
                      .select('.node-rect')
                      .attr("stroke", d => d.data._highlighted || d.data._upToTheRootHighlighted ? '#14760D' : 'none')
                      .attr("stroke-width", d.data._highlighted || d.data._upToTheRootHighlighted ? 40 : 1)

                  const pieChartWrapperNode = d3.select(this).select('.pie-chart-wrapper').node();
                  const val = (d.data.name.length * 5) % 100;// Dummy calc
                  // General pie chart invokation code
                  new PieChart()
                      .data([{ key: 'plan', color: '#6EC2EA', value: val }, { key: 'exec', color: '#0D5AAF', value: 100 - val }])
                      .container(pieChartWrapperNode)
                      .svgHeight(200)
                      .svgWidth(320)
                      .marginTop(40)
                      .image(d.data.imageUrl)
                      .backCircleColor('#1F72A7')
                      .defaultFont('Inter')
                      .render();
              })
              .render();

          const url = `data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAHgAAAB4CAYAAAA5ZDbSAAAABmJLR0QA/wD/AP+gvaeTAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAB3RJTUUH4QMaAyMA1SdmlAAAAVRJREFUeNrt26FOw2AUhuFTElzrETNLMNPtJVRVVFbtlnYXKGQFqldANo3EoLDUITazzCxBTNBk53lv4M+XJ/ndKZ52L9uft9eP+Oeqbtgs8O7+cbWO36/PiIgmwd4ojsdIU9n2l7XzNBYZNj9Eos6oTRbcdMAZAwxYgAVYgAVYgAUYsAALsAALsAALMGABFmABFmABFmABBizAAqwFgZ/fv+slHl7q3aobNpn2proujIgo276ep/HgixZgARZgARZgAQYswAIswAIswAIswIAFWIAFWIAFWIABC7AAC7AAC7D+AHZdeN97XRf6ogVYgAVYgAVYgAELsAALsAALsAADFmABFmABFmABFmDAAizAAizAAqxrYNeF973XdaEvWoAFWIAFWIAFGLAAC7AAC7AACzBgARZgARZgARZgAQYswAIswAKsW0p1m1S2/WXtPI1Fhs0nxU1Jj2yxm2sAAAAASUVORK5CYII=`
          const replaced = url.replace(/(\r\n|\n|\r)/gm)
          d3.select('.svg-chart-container')
              .style('background', 'radial-gradient(circle at center, #04192B 0, #000B0E 100%) url("https://raw.githubusercontent.com/bumbeishvili/coronavirus.davidb.dev/master/glow.png")')
              .style('background-image', `url(${replaced}), radial-gradient(circle at center, #04192B 0, #000B0E 100%)`)


      });

      function downloadPdf() {
          chart.exportImg({
              save: false,
              onLoad: (base64 => {
                  var pdf = new jspdf.jsPDF();
                  var img = new Image()
                  img.src = base64;
                  img.onload = function () {
                      pdf.addImage(img, 'JPEG', 5, 5, 595 / 3, img.height / img.width * 595 / 3);
                      pdf.save('chart.pdf');
                  }

              })
          })

      }
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.3.1/jspdf.umd.min.js"></script>
<script>
  var index = 0;
  var compact = 0;
  var actNdCent = 0;
</script>
@endsection
@endsection
