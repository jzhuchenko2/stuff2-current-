public class Zhuchenko_9_1a {
    private float temperature;
    private char scale;
    public Zhuchenko_9_1a(){
        this.temperature = 0;
        this.scale = 'C';
    }
    public Zhuchenko_9_1a(float temp){
        this.temperature = temp;
        this.scale = 'C';
    }
    public Zhuchenko_9_1a(char scale){
        this.temperature = 0;
        this.scale = scale;
    }
    public Zhuchenko_9_1a(float temp, char scale){
        this.temperature = temp;
        this.scale = scale;
    }
    public float getCelsius(){
        return this.scale == 'C' || this.scale == 'c'? this.temperature : Zhuchenko_9_1a.toCelsius(this.temperature);
    }
    public float getFahrenheit(){
        return this.scale == 'F' || this.scale == 'f' ? this.temperature : Zhuchenko_9_1a.toFahrenheit(this.temperature);
    }
    public char getScale(){
        return this.scale;
    }
    public void setTemp(float temp){
        this.temperature = temp;
    }
    public void setScale(char scale){
        this.scale = scale;
    }
    public void set(float temp, char scale){
        this.temperature = temp;
        this.scale = scale;
    }
    public boolean equals(Zhuchenko_9_1a other){
        return this.scale == 'C' || this.scale == 'c' ? this.temperature == other.getCelsius() : this.temperature == other.getFahrenheit();
    }
    public boolean greater(Zhuchenko_9_1a other){
        return this.scale == 'C' || this.scale == 'c' ? this.temperature > other.getCelsius() : this.temperature > other.getFahrenheit();
    }
    public boolean less(Zhuchenko_9_1a other){
        return this.scale == 'C' || this.scale == 'c' ? this.temperature < other.getCelsius() : this.temperature < other.getFahrenheit();
    }
    public String toString(){
        return this.scale == 'C' || this.scale == 'c' ? String.format("%7.2f", this.getCelsius()) + " degrees C" : String.format("%7.2f", this.getFahrenheit()) + " degrees F";
    }
    public static float toCelsius(float Fahrenheit){
        return (Fahrenheit - 32) * 5 / 9;
    }
    public static float toFahrenheit(float Celsius){
        return Celsius * 9 / 5 + 32;
    }
}