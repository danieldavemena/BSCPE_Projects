Public Class Form1

    Function ulam()
        Dim sum As Integer

        If CheckBox1.Checked Then
            sum += CheckBox1.Text
        End If

        If CheckBox2.Checked Then
            sum += CheckBox2.Text
        End If

        If CheckBox3.Checked Then
            sum += CheckBox3.Text
        End If

        If CheckBox4.Checked Then
            sum += CheckBox4.Text
        End If

        If CheckBox5.Checked Then
            sum += CheckBox5.Text
        End If

        Return sum
    End Function

    Function inumin()
        Dim sum As Integer

        If RadioButton1.Checked Then
            sum = RadioButton1.Text
        ElseIf RadioButton2.Checked Then
            sum = RadioButton2.Text
        ElseIf RadioButton3.Checked Then
            sum = RadioButton3.Text
        ElseIf RadioButton4.Checked Then
            sum = RadioButton4.Text
        ElseIf RadioButton5.Checked Then
            sum = RadioButton5.Text
        End If

        Return sum
    End Function

    Function service()
        Dim sum As Integer

        If CheckBox6.Checked Then
            sum += CheckBox6.Text
        ElseIf CheckBox7.Checked Then
            sum += CheckBox7.Text
        ElseIf CheckBox8.Checked Then
            sum += CheckBox8.Text
        End If

        Return sum
    End Function

    Private Sub Button1_Click(ByVal sender As System.Object, ByVal e As System.EventArgs) Handles Button1.Click
        Dim sum = ulam() + inumin() + service()
        TextBox3.Text = TextBox1.Text
        TextBox1.Clear()
        TextBox2.Text = sum
    End Sub

    Private Sub TextboxDisable(ByVal sender As System.Object, ByVal e As KeyPressEventArgs) Handles TextBox3.KeyPress, TextBox2.KeyPress
        e.Handled = True
    End Sub


End Class
