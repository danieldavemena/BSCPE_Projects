Public Class Calculator
    Dim numFirst As Double
    Dim numSecond As Double
    Dim operation As String
    Dim answer As Double
    Dim newOP As Boolean = False

    Private Sub add_Click(ByVal sender As System.Object, ByVal e As System.EventArgs) Handles add.Click
        numFirst = TextBox1.Text
        TextBox1.Text = ""
        operation = "+"
    End Sub

    Private Sub subtract_Click(ByVal sender As System.Object, ByVal e As System.EventArgs) Handles subtract.Click
        numFirst = TextBox1.Text
        TextBox1.Text = ""
        operation = "-"
    End Sub

    Private Sub multiply_Click(ByVal sender As System.Object, ByVal e As System.EventArgs) Handles multiply.Click
        numFirst = TextBox1.Text
        TextBox1.Text = ""
        operation = "*"
    End Sub

    Private Sub divide_Click(ByVal sender As System.Object, ByVal e As System.EventArgs) Handles divide.Click
        numFirst = TextBox1.Text
        TextBox1.Text = ""
        operation = "/"
    End Sub

    Private Sub equal_Click(ByVal sender As System.Object, ByVal e As System.EventArgs) Handles equal.Click
        Try
            numSecond = TextBox1.Text

            Select Case operation
                Case "+"
                    answer = numFirst + numSecond
                    TextBox1.Text = answer
                    newOP = True
                Case "-"
                    answer = numFirst - numSecond
                    TextBox1.Text = answer
                    newOP = True
                Case "*"
                    answer = numFirst * numSecond
                    TextBox1.Text = answer
                    newOP = True
                Case "/"
                    answer = numFirst / numSecond
                    TextBox1.Text = answer
                    newOP = True
            End Select
        Catch ex As System.InvalidCastException
            MessageBox.Show("Error! Input a valid character", "Error", MessageBoxButtons.OK, MessageBoxIcon.Warning)
        Catch ex As System.OverflowException
            TextBox1.Text = "Undefined"
        End Try
    End Sub

    Private Sub num1_Click(ByVal sender As System.Object, ByVal e As System.EventArgs) Handles num1.Click
        If newOP = True Then
            TextBox1.Clear()
            newOP = False
        End If
        TextBox1.Text += "1"
    End Sub

    Private Sub num2_Click(ByVal sender As System.Object, ByVal e As System.EventArgs) Handles num2.Click
        If newOP = True Then
            TextBox1.Clear()
            newOP = False
        End If
        TextBox1.Text += "2"
    End Sub

    Private Sub num3_Click(ByVal sender As System.Object, ByVal e As System.EventArgs) Handles num3.Click
        If newOP = True Then
            TextBox1.Clear()
            newOP = False
        End If
        TextBox1.Text += "3"
    End Sub

    Private Sub num4_Click(ByVal sender As System.Object, ByVal e As System.EventArgs) Handles num4.Click
        If newOP = True Then
            TextBox1.Clear()
            newOP = False
        End If
        TextBox1.Text += "4"
    End Sub

    Private Sub num5_Click(ByVal sender As System.Object, ByVal e As System.EventArgs) Handles num5.Click
        If newOP = True Then
            TextBox1.Clear()
            newOP = False
        End If
        TextBox1.Text += "5"
    End Sub

    Private Sub num6_Click(ByVal sender As System.Object, ByVal e As System.EventArgs) Handles num6.Click
        If newOP = True Then
            TextBox1.Clear()
            newOP = False
        End If
        TextBox1.Text += "6"
    End Sub

    Private Sub num7_Click(ByVal sender As System.Object, ByVal e As System.EventArgs) Handles num7.Click
        If newOP = True Then
            TextBox1.Clear()
            newOP = False
        End If
        TextBox1.Text += "7"
    End Sub

    Private Sub num8_Click(ByVal sender As System.Object, ByVal e As System.EventArgs) Handles num8.Click
        If newOP = True Then
            TextBox1.Clear()
            newOP = False
        End If
        TextBox1.Text += "8"
    End Sub

    Private Sub num9_Click(ByVal sender As System.Object, ByVal e As System.EventArgs) Handles num9.Click
        If newOP = True Then
            TextBox1.Clear()
            newOP = False
        End If
        TextBox1.Text += "9"
    End Sub

    Private Sub num0_Click(ByVal sender As System.Object, ByVal e As System.EventArgs) Handles num0.Click
        If newOP = True Then
            TextBox1.Clear()
            newOP = False
        End If
        TextBox1.Text += "0"
    End Sub

    Private Sub point_Click(ByVal sender As System.Object, ByVal e As System.EventArgs) Handles point.Click

        If newOP = True Then
            TextBox1.Clear()
            newOP = False
        End If

        If Not TextBox1.Text.Contains(".") Then
            TextBox1.Text += "."
        End If
    End Sub

    Private Sub clear_Click(ByVal sender As System.Object, ByVal e As System.EventArgs) Handles clear.Click
        TextBox1.Clear()
    End Sub

    Private Sub Textbox1_keypress(ByVal sender As System.Object, ByVal e As KeyPressEventArgs) Handles TextBox1.KeyPress
        Dim allowed = ".1234567890" & ControlChars.Back

        If allowed.Contains(e.KeyChar) Then
            If TextBox1.Text.Contains(".") Then e.Handled = True
        Else
            e.Handled = True
        End If

    End Sub

End Class
