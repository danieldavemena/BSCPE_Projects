Imports System.Data.SqlClient

Public Class Form1
    Private Sub Form1_Load(ByVal sender As Object, ByVal e As EventArgs) Handles MyBase.Load
        conopen()
        MsgBox("Connected!")
        con.Close()
        marikit()
    End Sub

    Private Sub btnadd_Click(ByVal sender As Object, ByVal e As EventArgs) Handles btnadd.Click
        Dim id As Integer = TextBox1.Text
        Dim lastname As String = TextBox2.Text
        Dim givenname As String = TextBox3.Text
        Dim age As String = TextBox4.Text
        Dim address As String = TextBox5.Text
        Dim query As String = "INSERT INTO tb_urs VALUES (@id,@lastname,@givenname,@age,@address)"
        Using cmd As SqlCommand = New SqlCommand(query, con)
            cmd.Parameters.AddWithValue("@id", id)
            cmd.Parameters.AddWithValue("@lastname", lastname)
            cmd.Parameters.AddWithValue("@givenname", givenname)
            cmd.Parameters.AddWithValue("@age", age)
            cmd.Parameters.AddWithValue("@address", address)
            con.Open()
            cmd.ExecuteNonQuery()
            con.Close()
            TextBox1.Text = ""
            TextBox2.Text = ""
            TextBox3.Text = ""
            TextBox4.Text = ""
            TextBox5.Text = ""
            MsgBox("success")
            marikit()
        End Using
    End Sub

    Public Sub marikit()
        Dim query As String = "Select * FROM tb_urs"
        Using cmd As SqlCommand = New SqlCommand(query, con)
            Using da As New SqlDataAdapter
                da.SelectCommand = cmd

                Using dt As New DataTable()
                    da.Fill(dt)
                    DataGridView1.DataSource = dt
                End Using
            End Using
        End Using
    End Sub

    Private Sub btnsearch_Click(ByVal sender As Object, ByVal e As EventArgs) Handles btnsearch.Click
        Dim query As String = "SELECT * FROM tb_urs WHERE id = '" & TextBox6.Text & "'"
        Using cmd As SqlCommand = New SqlCommand(query, con)
            Using da As New SqlDataAdapter()
                da.SelectCommand = cmd
                Using dt As New DataTable()
                    da.Fill(dt)
                    If dt.Rows.Count > 0 Then
                        TextBox1.Text = dt.Rows(0)(0).ToString()
                        TextBox2.Text = dt.Rows(0)(1).ToString()
                        TextBox3.Text = dt.Rows(0)(2).ToString()
                        TextBox4.Text = dt.Rows(0)(3).ToString()
                        TextBox5.Text = dt.Rows(0)(4).ToString()
                    Else
                        TextBox1.Text = ""
                        TextBox2.Text = ""
                        TextBox3.Text = ""
                        TextBox4.Text = ""
                        TextBox5.Text = ""
                    End If
                End Using
            End Using
        End Using
    End Sub

    Private Sub btnupdate_Click(ByVal sender As Object, ByVal e As EventArgs) Handles btnupdate.Click
        Dim id As Integer = TextBox1.Text
        Dim lastname As String = TextBox2.Text
        Dim givenname As String = TextBox3.Text
        Dim age As String = TextBox4.Text
        Dim address As String = TextBox5.Text
        Dim query As String = "UPDATE tb_urs SET id=@id,lastname=@lastname,givenname=@givenname,age=@age,address=@address WHERE id = @id"
        Using cmd As SqlCommand = New SqlCommand(query, con)
            cmd.Parameters.AddWithValue("@id", id)
            cmd.Parameters.AddWithValue("@lastname", lastname)
            cmd.Parameters.AddWithValue("@givenname", givenname)
            cmd.Parameters.AddWithValue("@age", age)
            cmd.Parameters.AddWithValue("@address", address)
            con.Open()
            cmd.ExecuteNonQuery()
            con.Close()
            TextBox1.Text = ""
            TextBox2.Text = ""
            TextBox3.Text = ""
            TextBox4.Text = ""
            TextBox5.Text = ""
            MessageBox.Show("success update")
            marikit()
        End Using
    End Sub

    Private Sub btndelete_Click(ByVal sender As Object, ByVal e As EventArgs) Handles btndelete.Click
        Dim id As String = TextBox1.Text
        Dim query As String = "DELETE FROM tb_urs WHERE id=@id"
        Using cmd As SqlCommand = New SqlCommand(query, con)
            cmd.Parameters.AddWithValue("@id", id)
            con.Open()
            cmd.ExecuteNonQuery()
            con.Close()
            TextBox1.Text = ""
            TextBox2.Text = ""
            TextBox3.Text = ""
            TextBox4.Text = ""
            TextBox5.Text = ""
            MessageBox.Show("success DELETED")
            marikit()
        End Using
    End Sub

    Private Sub TextBox1_TextChanged(ByVal sender As System.Object, ByVal e As KeyPressEventArgs) Handles TextBox1.KeyPress
        If Char.IsLetter(e.KeyChar) Or Char.IsPunctuation(e.KeyChar) Or Char.IsSymbol(e.KeyChar) Then
            e.Handled = True
        End If
    End Sub

    Private Sub TextBox2_TextChanged(ByVal sender As System.Object, ByVal e As KeyPressEventArgs) Handles TextBox2.KeyPress
        If Char.IsDigit(e.KeyChar) Or Char.IsPunctuation(e.KeyChar) Or Char.IsSymbol(e.KeyChar) Then
            e.Handled = True
        End If
    End Sub

    Private Sub TextBox3_TextChanged(ByVal sender As System.Object, ByVal e As KeyPressEventArgs) Handles TextBox3.KeyPress
        If Char.IsDigit(e.KeyChar) Or Char.IsPunctuation(e.KeyChar) Or Char.IsSymbol(e.KeyChar) Then
            e.Handled = True
        End If
    End Sub

    Private Sub TextBox4_TextChanged(ByVal sender As System.Object, ByVal e As KeyPressEventArgs) Handles TextBox4.KeyPress
        If Char.IsLetter(e.KeyChar) Or Char.IsPunctuation(e.KeyChar) Or Char.IsSymbol(e.KeyChar) Then
            e.Handled = True
        End If
    End Sub

    Private Sub TextBox6_TextChanged(ByVal sender As System.Object, ByVal e As KeyPressEventArgs) Handles TextBox6.KeyPress
        If Char.IsLetter(e.KeyChar) Or Char.IsPunctuation(e.KeyChar) Or Char.IsSymbol(e.KeyChar) Then
            e.Handled = True
        End If
    End Sub


    Private Sub Button1_Click(ByVal sender As System.Object, ByVal e As System.EventArgs) Handles Button1.Click
        Form4.Show()
    End Sub
End Class