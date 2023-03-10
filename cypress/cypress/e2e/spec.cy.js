console.log(Cypress.config());
describe('empty spec', () => {
  it('passes', () => {
    cy.setCookie("flag", "CDF{00p5_My_c00k1E_15_90nE}")
    cy.intercept('http://webshop/*', (req) => {
      req.headers['x-moderator-header'] = "719ffbccd1f60fabb76192606929585c"
})

    cy.visit({
        url: 'http://webshop:80/orders.php'
       })

      cy.get('.order-details[data-status="new"]').last().click()
  })
})
