class Cursor
{
  constructor()
  {
    this.$cursor = document.querySelector('.js-cursor')
    this.$cursor_in = document.querySelector('.js-cursor--in')
  }
  // Made marker img follow the mouse 
  followCursor() {
    let x = this.event.pageX
    let y = this.event.pageY
    this.$imgCursor.style.left = ((x + 1) - 25) + 'px'
    this.$imgCursor.style.top = ((y + 1) - 70) + 'px'
  }
}



