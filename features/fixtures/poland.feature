Feature: Fikstury dla tabeli poland

  Scenario: Lista fixtur z tabeli poland
    Given I am on "poland.html"
     Then I should see "Warszawa"
      And I should see "123"
     Then I should see "Gdansk"
      And I should see "234"
     Then I should see "Lublin"
      And I should see "345"