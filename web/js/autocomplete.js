jQuery(function($) {

  'use strict'

  $('.main-programming-wrapper')
    .on('keyup', '.programming-value', function () {
      const mainParent = $(this).parents('.main-programming-wrapper')
      const items = $(mainParent).find('.programming-item')
      const value = $(this).val().toLowerCase()

      if (value) {
        $(items)
          .addClass('hidden')
          .filter(function () {
            return $(this).data('value').toLowerCase().indexOf(value) !== -1
          })
          .removeClass('hidden')

        $(mainParent).find('.dropdown').addClass('active')
      } else {
        $(mainParent).find('.dropdown').removeClass('active')
        $(items).removeClass('hidden')
      }
    })
    .on('click', '.programming-item', function () {
      const value = $(this).data('value')
      const id = $(this).data('item')
      const mainParent = $(this).parents('.main-programming-wrapper')

      $(mainParent).find('.programming-item').addClass('hidden')
      $(mainParent).find('.programming-value').val(value)
      $(mainParent).find('select[name=programming]').val(id)
    })

})