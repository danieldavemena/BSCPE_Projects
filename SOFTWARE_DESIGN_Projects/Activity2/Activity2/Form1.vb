Public Class Form1
    Private Sub Button1_Click(ByVal sender As System.Object, ByVal e As System.EventArgs) Handles Button1.Click
        Dim userinput As String = TextBox1.Text

        ComboBox1.Items.Add(userinput)
        TextBox1.Clear()
    End Sub


    Private Sub Button2_Click(ByVal sender As System.Object, ByVal e As System.EventArgs) Handles Button2.Click
        If ComboBox1.Text = "" Then
            MessageBox.Show("Select A Province", "Notice", MessageBoxButtons.OK, MessageBoxIcon.Warning)
        Else
            Label2.Text = ComboBox1.Text
        End If
    End Sub
End Class
