// Create an XML document that
// contains 10 users information. Write
// a Java Program, which takes User
// Id as input and returns the user
// details by taking the user
// information from XML document
// using DOM parser or SAX parser.

import java.io.*;
import java.util.*;
import java.util.Scanner;
import javax.xml.parsers.*;
import org.w3c.dom.*;

public class user
{
    public static void main(String[] args) throws Exception
    {
        DocumentBuilderFactory dbf = DocumentBuilderFactory.newInstance();
        DocumentBuilder db = dbf.newDocumentBuilder();
        Document doc = db.parse("exp7/index.xml");
        Element root = doc.getDocumentElement();
        NodeList nl = root.getElementsByTagName("user");
        System.out.println("Enter the user id");
        Scanner sc = new Scanner(System.in);
        int id = sc.nextInt();
        for(int i=0;i<nl.getLength();i++)
        {
            Element e = (Element)nl.item(i);
            int uid = Integer.parseInt(e.getAttribute("id"));
            if(uid == id)
            {
                System.out.println("User id: "+e.getAttribute("id"));
                System.out.println("User name: "+e.getElementsByTagName("name").item(0).getTextContent());
                System.out.println("User age: "+e.getElementsByTagName("age").item(0).getTextContent());
                System.out.println("User address: "+e.getElementsByTagName("address").item(0).getTextContent());
            }
        }
    }
}
