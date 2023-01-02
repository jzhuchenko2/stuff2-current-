public class Zhuchenko_9_1b {
    public static void main(String Arg[]){

        Zhuchenko_9_1a t1 = new Zhuchenko_9_1a();
        Zhuchenko_9_1a t2 = new Zhuchenko_9_1a(32);
        Zhuchenko_9_1a t3 = new Zhuchenko_9_1a('F');
        Zhuchenko_9_1a t4 = new Zhuchenko_9_1a(0, 'C');
        Zhuchenko_9_1a t5 = new Zhuchenko_9_1a(200, 'C');
        Zhuchenko_9_1a t6 = new Zhuchenko_9_1a(-40, 'C');
        t1.setTemp(100);
        t1.setScale('C');
        t2.setScale('F');
        t3.setTemp(-40);
        t5.set(212, 'F');
        System.out.println("t1 : " + t1);
        System.out.println("t2 : " + t2);
        System.out.println("t3 : " + t3);
        System.out.println("t4 : " + t4);
        System.out.println("t5 : " + t5);
        System.out.println("t6 : " + t6);
        System.out.println();
        System.out.println("t1 > t2 : " + t1.greater(t2));
        System.out.println("t4 > t2 : " + t4.greater(t2));
        System.out.println("t3 < t2 : " + t3.less(t2));
        System.out.println("t2 < t4 : " + t2.less(t4));

        System.out.println("t1 == t5 : " + t1.equals(t5));
        System.out.println("t3 == t6 : " + t3.equals(t6));
        System.out.println("t4 == t2 : " + t4.equals(t2));
        System.out.println();

        
    }
}
