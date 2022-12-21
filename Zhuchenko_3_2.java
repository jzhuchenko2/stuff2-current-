import javax.swing.JOptionPane;
public class Zhuchenko_3_2 {
    public static void main(String[] args)
    {
        String C_F = JOptionPane.showInputDialog("Please enter f for Fahrenheit to Celsius or c for Celsies to Fahrenheit");
        String c = "c";
        String f = "f";
        if(C_F.equals(f)){
            String Degrees_F = JOptionPane.showInputDialog( "please enter temp in fahrenheit");
            int far = Integer.parseInt(Degrees_F);
            double x=5*(far - 32)/9;
            JOptionPane.showMessageDialog(null,x + " celsius");
        }
        else if(C_F.equals(c)){
            String Degrees_C = JOptionPane.showInputDialog( "please enter temp in Celsius");
            int cel = Integer.parseInt(Degrees_C);
            double y=((9*(cel)/5) + 32);
            JOptionPane.showMessageDialog(null,y + " fahrenheit");
        }
        else{
            JOptionPane.showMessageDialog(null, "Error please enter c or f");
        }
    }
}
