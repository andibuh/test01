/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
module('Selecting', {
  setup: function() {
    this.topLis = $('#selected-plays > li.horizontal');
  }
});

test('Child Selector', function() {
  expect(1);
  equal(this.topLis.length, 3, 'Top LIs have horizontal class');
});

test('Attribute Selectors', function() {
  expect(2);
  ok(this.topLis.find('.mailto').length === 1, 'a.mailto');
  equal(this.topLis.find('.pdflink').length, 1, 'a.pdflink');
});

module('Ajax');

// <editor-fold desc="Mein Folder">
// var a = {};
// </editor-fold>