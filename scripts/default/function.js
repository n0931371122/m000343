function imgFill() {
  $('.imgFill').imgLiquid();
  $('.imgFill').each(function () {
    const $this = $(this),
          $picture = $this.find('picture'),
          $source = $picture.children('source');
    let src, srcset;
    let node, minmax, breakpoint;
    let windowWidth = window.innerWidth;
    if ( $this.find('img').data('src') != '' && $this.find('img').data('src') != undefined ) {
      src = $this.find('img').data('src');
    } else {
      src = $this.find('img').attr('src');
    }
    if ( $source.data('srcset') != '' && $source.data('srcset') != undefined ) {
      srcset = $source.data('srcset');
    } else {
      srcset = $source.attr('srcset');
    }
    if ($picture.length) {
      node = $source.attr('media').replace(/\(|\)| /g, '');
      minmax = node.split(':')[0];
      breakpoint = node.split(':')[1];
      if (minmax === 'min-width') {
        if (windowWidth >= parseFloat(breakpoint)) {
          $this.css('background-image', 'url("' + srcset + '")');
        } else {
          $this.css('background-image', 'url("' + src + '")');
        }
      } else if (minmax === 'max-width') {
        if (windowWidth <= parseFloat(breakpoint)) {
          $this.css('background-image', 'url("' + srcset + '")');
        } else {
          $this.css('background-image', 'url("' + src + '")');
        }
      } else if (minmax === 'orientation') {
        let wRatio = Math.abs(window.innerWidth / window.innerHeight);
        if (breakpoint === 'portrait' && wRatio <= 1) {
          $this.css('background-image', 'url("' + srcset + '")');
        } else if (breakpoint === 'portrait' && wRatio > 1) {
          $this.css('background-image', 'url("' + src + '")');
        }
        if (breakpoint === 'landscape' && wRatio > 1) {
          $this.css('background-image', 'url("' + srcset + '")');
        } else if (breakpoint === 'landscape' && wRatio <= 1) {
          $this.css('background-image', 'url("' + src + '")');
        }
      }
    }
  });
}

function orderRemove(arg) {
     Swal.fire({
        imageUrl: 'styles/images/common/alert.png',
        imageWidth: 100,
        imageHeight: 100,
        title: '取消訂單提醒',
        text: '取消訂單會錯過本次課程優惠',
        showConfirmButton: true,
        showCancelButton: true,
        confirmButtonText: '確定取消',
        cancelButtonText: '放棄取消',
        showCloseButton: true,
      reverseButtons: true,
    }).then(function(result) {
        if ( result.value ) {
            Swal.fire({
              imageUrl: 'styles/images/common/success.png',
              imageWidth: 100,
              imageHeight: 100,
              title: '訂單已取消',
              text: '歡迎再次購買，如有任何問題請聯絡我們。',
              showConfirmButton: false,
              showCloseButton: true,
              timer: 2000,
            })
        }
    });
}
function projectRemove(arg) {
     Swal.fire({
        imageUrl: 'styles/images/common/alert.png',
        imageWidth: 100,
        imageHeight: 100,
        title: '取消訂閱提醒',
        text: '取消訂閱將於下一次停止扣款',
        showConfirmButton: true,
        showCancelButton: true,
        confirmButtonText: '確定取消',
        cancelButtonText: '放棄取消',
        showCloseButton: true,
        customClass: {
          popup: 'revers-btn-color',
        }
    }).then(function(result) {
        if ( result.value ) {
            Swal.fire({
              imageUrl: 'styles/images/common/success.png',
              imageWidth: 100,
              imageHeight: 100,
              title: '訂閱已取消',
              text: '歡迎再次訂閱，如有任何問題請聯絡我們。',
              showConfirmButton: false,
              showCloseButton: true,
              timer: 2000,
            })
        }
    });
}
function courseRemove(arg) {
     Swal.fire({
        imageUrl: 'styles/images/common/alert.png',
        imageWidth: 100,
        imageHeight: 100,
        title: '移除課程提醒',
        showConfirmButton: true,
        showCancelButton: true,
        confirmButtonText: '確定取消',
        cancelButtonText: '放棄取消',
        showCloseButton: true,
    }).then(function(result) {
        if ( result.value ) {
            Swal.fire({
              imageUrl: 'styles/images/common/success.png',
              imageWidth: 100,
              imageHeight: 100,
              title: '課程已移除',
              showConfirmButton: false,
              showCloseButton: true,
              timer: 2000,
            })
        }
    });
}
function useCoupon(arg) {
    Swal.fire({
        imageUrl: 'styles/images/common/success.png',
        imageWidth: 100,
        imageHeight: 100,
        title: '已使用優惠券',
        showConfirmButton: false,
        showCloseButton: true,
        timer: 2000,
    })
}

function uniformHeight($el) {
    if ($el.length !== 0) {
        var $h_array = [];
        $el.each(function (index) {
            $(this).height("auto");
            $h_array[index] = $(this).height();
        });
        $max = Math.max.apply(null, $h_array);
        $el.each(function (index) {
            $(this).height($max);
        });
    }
}

function copyText(id) {
    var TextRange = document.createRange();
    TextRange.selectNode(document.getElementById(id));
    sel = window.getSelection();
    sel.removeAllRanges();
    sel.addRange(TextRange);
    document.execCommand("copy");
}
function readURL(input){
  if(input.files && input.files[0]){
    var imageTagID = input.getAttribute("data-targetID");
    var reader = new FileReader();
    reader.onload = function (e) {
    var img = document.getElementById(imageTagID);
      img.setAttribute("src", e.target.result)
    }
    reader.readAsDataURL(input.files[0]);
  }
}