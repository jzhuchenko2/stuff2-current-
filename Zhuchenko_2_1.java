import java.util.Scanner;
import javax.swing.JOptionPane;
public class Zhuchenko_2_1 {
    public static void main(String[] args)
    {
Scanner keyScan = new Scanner(System.in);
String wordOne = keyScan.next();
wordOne = JOptionPane.showInputDialog("Enter your favorite color [lowercase]");
String wordTwo = keyScan.next();
wordTwo = JOptionPane.showInputDialog("Enter your favorite food [lowercase]");
String wordThree = keyScan.next();
wordThree = JOptionPane.showInputDialog("Enter your favorite Animal [lowercase]");
String wordfour =  keyScan.next();
wordfour = JOptionPane.showInputDialog("Enter the first name of a friend or relative [uppercase]");
{
JOptionPane.showMessageDialog(null,"I had a dream that " + wordfour + " ate a " + wordOne + " " + wordThree + " "
+ "\nand said it tastes like " + wordTwo + "!");
}
keyScan.close();
}
    }