<div>
  <button class="ml-3 mb-3" onclick="flag(this.value, `{{$data->posts_id}}`)" value="false" id="flag{{$data->posts_id}}">
    <svg version="1.1" id="svg_color{{$data->posts_id}}" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
      y="0px" viewBox="0 0 512 512" xml:space="preserve" class="w-7 h-7">
      <g>
        <path class="st0" d="M484.5,327.114c16.188-6.984,27.5-23.047,27.5-41.781c0-19.25-11.969-35.625-28.859-42.297
        c9.891-8.359,16.281-20.672,16.281-34.625c0-25.172-20.391-45.563-45.547-45.563H350.063c9.969-19.625,18.625-45.563,15.672-76.594
        c-2.766-29.203-27.391-80.828-65.359-83.875c-29.25-2.344-34.906,8.625-34.906,37.969c0,0,0.328,28.422,0.328,46.641
        c0,32.641-10.859,49.25-49.234,76.766c-50.625,36.297-59.406,55.031-59.406,55.031v216.672c0,27.219,22.063,49.281,49.281,49.281
        h94.531h115.375c25.188,0,59.219-12.156,59.219-45.547c0-12.5-5.031-23.813-13.188-32.047
        c22.031-3.188,39.016-21.969,39.016-44.891C501.391,348.021,494.734,335.474,484.5,327.114z"></path>
        <path class="st0" d="M96.703,202.849H24.625C11.031,202.849,0,213.864,0,227.489v257.813c0,13.594,11.031,24.625,24.625,24.625
        h72.078c13.609,0,24.641-11.031,24.641-24.625V227.489C121.344,213.864,110.313,202.849,96.703,202.849z M65.906,470.817
        c-12.594,0-22.813-10.219-22.813-22.813s10.219-22.813,22.813-22.813c12.625,0,22.813,10.219,22.813,22.813
        S78.531,470.817,65.906,470.817z"></path>
      </g>
    </svg>
  </button>
</div>

<script>
  document.addEventListener('DOMContentLoaded', () => {
    // ページ読み込み時にすべての投稿IDに対して処理を行う
    const flags = document.querySelectorAll('[id^="flag"]');
    flags.forEach(flag => {
      const id = flag.id.replace('flag', '');
      if (localStorage.getItem('posts_id' + id) == id) {
        document.getElementById('svg_color' + id).style.fill = '#FBCFE8';
        flag.value = true;
      }
    });
  });

  function flag(value, id) {
    if (value == 'false') {
      // falseの場合
      document.getElementById('flag' + id).value = true;
      document.getElementById('svg_color' + id).style.fill = '#FBCFE8';
      localStorage.setItem('posts_id' + id, id);
      console.log('保存:' + id);
    } else {
      // trueの場合
      document.getElementById('flag' + id).value = false;
      document.getElementById('svg_color' + id).style.fill = '#000000';
      localStorage.removeItem('posts_id' + id);
      console.log('削除:' + id);
    }
  }
</script>

</script>