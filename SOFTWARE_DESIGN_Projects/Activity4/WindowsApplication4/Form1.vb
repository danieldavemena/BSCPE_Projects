Imports System.Data.SqlClient

Public Class Form1

    Private Sub Form1_Load(ByVal sender As System.Object, ByVal e As System.EventArgs) Handles MyBase.Load
        conn()
    End Sub

    Private Sub Button1_Click(ByVal sender As System.Object, ByVal e As System.EventArgs) Handles Button1.Click
        Dim username As String = TextBox1.Text
        Dim password As String = TextBox2.Text
        Dim query As String = "SELECT * from testTable WHERE username=@username AND password=@password"

        Using cmd As SqlCommand = New SqlCommand(query, con)
            cmd.Parameters.AddWithValue("@username", username)
            cmd.Parameters.AddWithValue("@password", password)

            Using a As SqlDataAdapter = New SqlDataAdapter(cmd)
                Using dt As DataTable = New DataTable
                    a.Fill(dt)
                    If dt.Rows.Count = 1 Then
                        MsgBox("Logged in!")
                    End If
                End Using
            End Using
        End Using

    End Sub


End Class
