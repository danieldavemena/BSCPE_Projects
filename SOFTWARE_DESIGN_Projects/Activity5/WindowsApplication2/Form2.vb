Imports System.Data.SqlClient
Public Class Form2
    Private Sub Button1_Click(ByVal sender As Object, ByVal e As EventArgs) Handles Button1.Click
        con.Open()
        cmd = New SqlCommand("login_urs2", con)
        With cmd
            .CommandType = CommandType.StoredProcedure
            .Parameters.AddWithValue("@user", TextBox1.Text)
            .Parameters.AddWithValue("@pass", TextBox2.Text)
            .Parameters.Add("@result", SqlDbType.Int).Direction = ParameterDirection.Output
            .ExecuteScalar()

            If CInt(.Parameters("@result").Value = 1) Then
                MsgBox("good", vbInformation)

                con.Close()
                Form1.Show()
                Me.Hide()
            Else
                MsgBox("bad", vbCritical)
            End If
        End With
        con.Close()

    End Sub

    Private Sub Form2_Load(ByVal sender As Object, ByVal e As EventArgs) Handles MyBase.Load
        conopen()
        MsgBox("Connected!")
        con.Close()
    End Sub


End Class

