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
      this.scroll = pageYOffset
      this.cursorX = e.clientX
      this.cursorY = e.clientY
      this.followCursorIn()
      this.followCursorOut()
    })
    
  }

  // Made marker img follow the mouse 
  followCursorIn() {
    this.$cursor_in.style.left = (this.cursorX + 14 - 18) + 'px' 
    this.$cursor_in.style.top = (this.cursorY + 14 - 18 + this.scroll) + 'px' 
    this.$cursor_in.style.display = 'block'
  }

  followCursorOut() {
    this.$cursor.style.display = 'block'
    this.$cursor.style.left = (this.cursorX - 18) + 'px' 
    this.$cursor.style.top = (this.cursorY - 18 + this.scroll) + 'px' 
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
      }, 250)  // wait time
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
    this.$navContent = document.querySelectorAll('.js-nav-content')
    this.$underline = document.querySelectorAll('.js-nav-underline')
    this.$cursor = document.querySelector('.js-cursor')

    this.$navContent[0].addEventListener('mouseover', () =>
    {
      this.mouseIn(0)
    })
    this.$navContent[1].addEventListener('mouseover', () =>
    {
      this.mouseIn(1)
    })
    this.$navContent[2].addEventListener('mouseover', () =>
    {
      this.mouseIn(2)
    })
    this.$navContent[3].addEventListener('mouseover', () =>
    {
      this.mouseIn(3)
    })
    this.$navContent[4].addEventListener('mouseover', () =>
    {
      this.mouseIn(4)
    })
    this.$navContent[5].addEventListener('mouseover', () =>
    {
      this.mouseIn(5)
    })


    this.$navContent[0].addEventListener('mouseout', () =>
    {
      this.mouseOut(0)
    })
    this.$navContent[1].addEventListener('mouseout', () =>
    {
      this.mouseOut(1)
    })
    this.$navContent[2].addEventListener('mouseout', () =>
    {
      this.mouseOut(2)
    })
    this.$navContent[3].addEventListener('mouseout', () =>
    {
      this.mouseOut(3)
    })
    this.$navContent[4].addEventListener('mouseout', () =>
    {
      this.mouseOut(4)
    })
    this.$navContent[5].addEventListener('mouseout', () =>
    {
      this.mouseOut(5)
    })
  }
  mouseIn(i)
  {
    this.$underline[i].className = 'menu__underline--active'
    this.$cursor.style.opacity = '0'
    this.$cursor.style.transition = 'all 0.2s'
  }

  mouseOut(i)
  {
    this.$underline[i].className = 'menu__underline'
    this.$cursor.style.opacity = '1'
    this.$cursor.style.transition = 'all 0.2s'
  }
}

class ImgProjectHover
{
  constructor()
  {
    this.$projectIllu = document.querySelectorAll('.js-project-illu')
    this.$projectImg = document.querySelectorAll('.js-project-img')
    this.$cursorIn = document.querySelector('.js-cursor--in')

    this.$projectIllu[0].addEventListener('mouseover', () =>
    {
      this.mouseIn(0)
    })
    this.$projectIllu[1].addEventListener('mouseover', () =>
    {
      this.mouseIn(1)
    })
    this.$projectIllu[2].addEventListener('mouseover', () =>
    {
      this.mouseIn(2)
    })
    this.$projectIllu[3].addEventListener('mouseover', () =>
    {
      this.mouseIn(3)
    })

    
    this.$projectIllu[0].addEventListener('mouseout', () =>
    {
      this.mouseOut(0)
    })
    this.$projectIllu[1].addEventListener('mouseout', () =>
    {
      this.mouseOut(1)
    })
    this.$projectIllu[2].addEventListener('mouseout', () =>
    {
      this.mouseOut(2)
    })
    this.$projectIllu[3].addEventListener('mouseout', () =>
    {
      this.mouseOut(3)
    })
  }

  mouseIn(i)
  {
    this.$projectImg[i].style.transition = 'all 0.4s'
    this.$projectImg[i].style.transform = 'scale(1.2)'

    this.$cursorIn.style.backgroundColor = '#C90100'  
  }

  mouseOut(i)
  {
    this.$projectImg[i].style.transition = 'all 0.4s'
    this.$projectImg[i].style.transform = 'scale(1)'

    this.$cursorIn.style.backgroundColor = '#fff' 
  }


}

const cursor = new Cursor()
const wave = new Wave()
const navHover = new NavHover()
const imgProjectHover = new ImgProjectHover()

// window.onload = function () {

// }

new fullpage('#fullpage', {
  // navigation: true,
  responsiveWidth: 700,
  // anchors: ['home', 'service-prestige', 'Crehappy'],
  // parallax: true,
});