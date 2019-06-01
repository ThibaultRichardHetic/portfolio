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
    this.$cursor_in.style.left = (this.cursorX + 14) + 'px' 
    this.$cursor_in.style.top = (this.cursorY + 14) + 'px' 
  }

  followCursorOut() {
    this.$cursor.style.left = this.cursorX + 'px' 
    this.$cursor.style.top = this.cursorY + 'px' 
  }

}

const cursor = new Cursor()

window.onload = function () {
}


