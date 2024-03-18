Imports System.Data.SqlClient

Module Module1
    Public con As New SqlConnection
    Public cmd As New SqlCommand

    Sub conn()
        con.ConnectionString = "Data Source=DESKTOP-9F21P1I;Initial Catalog=one;Integrated Security=True"
    End Sub
End Module
