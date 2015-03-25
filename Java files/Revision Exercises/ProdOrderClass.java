/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package ExtensionEx;

/**
 *
 * @author s4532415
 */
public class Porder {
//variable declaration
    private String product;
    private double price;
    private double kilos;
    private double cost;
//constructor
    public Porder ( String product, double price, double kilos)
    {
        this.product=product;
        this.price=price;
        this.kilos=kilos;         
    }
//methods       
  public String getProduct()
   {
       return product;
   }
   public Double getPrice()
   {
       return price;
   }
   public Double getKilos()
   {
       return kilos;
   }
   public double Calcost()
   {
    cost = getPrice() * getKilos();     
    return cost;
   }
}