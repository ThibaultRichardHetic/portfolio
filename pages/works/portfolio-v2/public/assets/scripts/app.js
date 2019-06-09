// Class for custom cursor
class Cursor
{
  constructor()
  {
    this.$cursor = document.querySelector('.js-cursor')
    this.$cursor_in = document.querySelector('.js-cursor--in')

    // Get mouse position
    window.addEventListener('mousemove', (e) =>
    {
      this.cursorX = e.clientX
      this.cursorY = e.clientY
      this.followCursorIn()
      this.followCursorOut()
    })
  }

  // Made marker img follow the mouse 
  followCursorIn() {
    this.$cursor_in.style.left = (this.cursorX + 14 - 18) + 'px' 
    this.$cursor_in.style.top = (this.cursorY + 14 - 18) + 'px' 
  }

  followCursorOut() {
    this.$cursor.style.left = (this.cursorX - 18) + 'px' 
    this.$cursor.style.top = (this.cursorY - 18) + 'px' 
  }
}

// Class for wave effect in the title
class Wave
{
  constructor()
  {
    this.$span_title = document.querySelectorAll('.js-wave')
    this.waveCall()
    this.index = 0
  }

  waveCall()
  {
    (function theLoop (i) {
      setTimeout(function ()
      {
        wave.wave()
        if (--i) 
        {
          this.index ++
          theLoop(i)
        }
      }, 400)
    })(this.$span_title.length)
  }

  wave()
  {
    this.$span_title[this.index].classList = 'title--wave title--wave-effect js-wave'
    this.index ++
  }

}

class NavHover
{
  constructor()
  {
    this.$lala = document.querySelector('.js-lala')
    this.$lolo = document.querySelector('.js-lolo')

    this.$lala.addEventListener('mouseover', () =>
    {
      this.mouseIn()
    })

    this.$lala.addEventListener('mouseout', () =>
    {
      this.mouseOut()
    })

  }

  mouseIn()
  {
    this.$lolo.className = 'menu__underline--active'
  }

  mouseOut()
  {
    this.$lolo.className = 'menu__underline'
  }
}

const cursor = new Cursor()
const wave = new Wave()
const navHover = new NavHover()

// window.onload = function () {

// }


new fullpage('#fullpage', {
  // navigation: true,
  responsiveWidth: 700,
  // anchors: ['home', 'service-prestige', 'Crehappy'],
  // parallax: true,

});






