Feature: Create a new purchase invoice
    Scenario: Create a new purchase invoice
        Given the body:
        """
            "id": "26686c61-a27c-4ae2-be94-dabbac837055"
            "supplier": "Casa Daishana",
            "payTerm": "Pagar antes de la fecha de vencimiento",
            "date": "2021-05-01",
            "createdBy": "Annelys",
            "status": "Pendiente",
            "observations": "en proceso",
        """
        When using the url "api/purchase_invoice" with post method
        Then should response with code 201
