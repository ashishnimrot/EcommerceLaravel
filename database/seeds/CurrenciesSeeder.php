<?php

use App\Currency;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CurrenciesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement("INSERT INTO currencies (country, currency, code, symbol) VALUES
            ('Canada', 'Dollars', 'CAD', '$'), 
            ('United States of America', 'Dollars', 'USD', '$'),
            ('Hong Kong', 'Dollars', 'HKD', '$'),
            ('Iceland', 'Kronur', 'ISK', 'kr'),
            ('Philippines', 'Pesos', 'PHP', 'Php'),
            ('Denmark', 'Kroner', 'DKK', 'kr'),
            ('Hungary', 'Forint', 'HUF', 'Ft'),
            ('Czech Republic', 'Koruny', 'CZK', 'Kč'),
            ('Britain (United Kingdom)', 'Pounds', 'GBP', '£'),
            ('Norway', 'Krone', 'NOK', 'kr'),
            ('Sweden', 'Kronor', 'SEK', 'kr'),
            ('India', 'Rupees', 'INR', 'Rp'),  
            ('Indonesia', 'Rupiahs', 'IDR', 'Rp'),
            ('Brazil', 'Reais', 'BRL', 'R$'),  
            ('Russia', 'Rubles', 'RUB', 'руб'),
            ('Croatia', 'Kuna', 'HRK', 'kn'), 
            ('Japan', 'Yen', 'JPY', '¥'),
            ('Thailand', 'Baht', 'THB', '฿'), 
            ('Liechtenstein', 'Switzerland Francs', 'CHF', 'CHF'),
            ('Cyprus', 'Euro', 'EUR', '€'), 
            ('Malaysia', 'Ringgits', 'MYR', 'RM'),
            ('Bulgaria', 'Leva', 'BGN', 'лв'), 
            ('Turkey', 'Lira', 'TRY', 'TL'), 
            ('China', 'Yuan Renminbi', 'CNY', '¥'), 
            ('Norway', 'Krone', 'NOK', 'kr'),
            ('New Zealand', 'Dollars', 'NZD', '$'), 
            ('South Africa', 'Rand', 'ZAR', 'R'),
            ('Mexico', 'Pesos', 'MXN', '$'),
            ('Singapore', 'Dollars', 'SGD', '$'),
            ('Australia', 'Dollars', 'AUD', '$'),
            ('Israel', 'New Shekels', 'ILS', '₪'),
            ('Korea (South)', 'Won', 'KRW', '₩'), 
            ('Poland', 'Zlotych', 'PLN', 'zł'),
            ('Albania', 'Leke', 'ALL', 'Lek'),
            ('Afghanistan', 'Afghanis', 'AFN', '؋'),
            ('Argentina', 'Pesos', 'ARS', '$'),
            ('Aruba', 'Guilders', 'AWG', 'ƒ'),
            ('Azerbaijan', 'New Manats', 'AZN', 'ман'),
            ('Bahamas', 'Dollars', 'BSD', '$'),
            ('Barbados', 'Dollars', 'BBD', '$'),
            ('Belarus', 'Rubles', 'BYR', 'p.'),
            ('Belgium', 'Euro', 'EUR', '€'),
            ('Beliz', 'Dollars', 'BZD', 'BZ$'),
            ('Bermuda', 'Dollars', 'BMD', '$'),
            ('Bolivia', 'Bolivianos', 'BOB', '\$b'),
            ('Bosnia and Herzegovina', 'Convertible Marka', 'BAM', 'KM'),
            ('Botswana', 'Pula', 'BWP', 'P'),
            ('Britain (United Kingdom)', 'Pounds', 'GBP', '£'),
            ('Brunei Darussalam', 'Dollars', 'BND', '$'),
            ('Cambodia', 'Riels', 'KHR', '៛'),
            ('Cayman Islands', 'Dollars', 'KYD', '$'),
            ('Chile', 'Pesos', 'CLP', '$'),
            ('China', 'Yuan Renminbi', 'CNY', '¥'),
            ('Colombia', 'Pesos', 'COP', '$'),
            ('Costa Rica', 'Colón', 'CRC', '₡'),
            ('Cuba', 'Pesos', 'CUP', '₱'),
            ('Cyprus', 'Euro', 'EUR', '€'),
            ('Czech Republic', 'Koruny', 'CZK', 'Kč'),
            ('Dominican Republic', 'Pesos', 'DOP ', 'RD$'),
            ('East Caribbean', 'Dollars', 'XCD', '$'),
            ('Egypt', 'Pounds', 'EGP', '£'),
            ('El Salvador', 'Colones', 'SVC', '$'),
            ('England (United Kingdom)', 'Pounds', 'GBP', '£'),
            ('Euro', 'Euro', 'EUR', '€'),
            ('Falkland Islands', 'Pounds', 'FKP', '£'),
            ('Fiji', 'Dollars', 'FJD', '$'),
            ('France', 'Euro', 'EUR', '€'),
            ('Ghana', 'Cedis', 'GHC', '¢'),
            ('Gibraltar', 'Pounds', 'GIP', '£'),
            ('Greece', 'Euro', 'EUR', '€'),  
            ('Guatemala', 'Quetzales', 'GTQ', 'Q'),  
            ('Guernsey', 'Pounds', 'GGP', '£'),  
            ('Guyana', 'Dollars', 'GYD', '$'),  
            ('Holland (Netherlands)', 'Euro', 'EUR', '€'),  
            ('Honduras', 'Lempiras', 'HNL', 'L'),  
            ('Hong Kong', 'Dollars', 'HKD', '$'),  
            ('Hungary', 'Forint', 'HUF', 'Ft'),      
            ('Iran', 'Rials', 'IRR', '﷼'),  
            ('Ireland', 'Euro', 'EUR', '€'),  
            ('Isle of Man', 'Pounds', 'IMP', '£'),    
            ('Italy', 'Euro', 'EUR', '€'),  ('Jamaica', 'Dollars', 'JMD', 'J$'),    ('Jersey', 'Pounds', 'JEP', '£'),  ('Kazakhstan', 'Tenge', 'KZT', 'лв'),  ('Korea (North)', 'Won', 'KPW', '₩'),  ('Kyrgyzstan', 'Soms', 'KGS', 'лв'),  ('Laos', 'Kips', 'LAK', '₭'),  ('Latvia', 'Lati', 'LVL', 'Ls'),  ('Lebanon', 'Pounds', 'LBP', '£'),  ('Liberia', 'Dollars', 'LRD', '$'),  ('Liechtenstein', 'Switzerland Francs', 'CHF', 'CHF'),  ('Lithuania', 'Litai', 'LTL', 'Lt'),  ('Luxembourg', 'Euro', 'EUR', '€'),  ('Macedonia', 'Denars', 'MKD', 'ден'),  ('Malaysia', 'Ringgits', 'MYR', 'RM'),  ('Malta', 'Euro', 'EUR', '€'),  ('Mauritius', 'Rupees', 'MUR', '₨'),    ('Mongolia', 'Tugriks', 'MNT', '₮'),  ('Mozambique', 'Meticais', 'MZN', 'MT'),  ('Namibia', 'Dollars', 'NAD', '$'),  ('Nepal', 'Rupees', 'NPR', '₨'),  ('Netherlands Antilles', 'Guilders', 'ANG', 'ƒ'),  ('Netherlands', 'Euro', 'EUR', '€'),  ('New Zealand', 'Dollars', 'NZD', '$'),  ('Nicaragua', 'Cordobas', 'NIO', 'C$'),  ('Nigeria', 'Nairas', 'NGN', '₦'),  ('North Korea', 'Won', 'KPW', '₩'),  ('Norway', 'Krone', 'NOK', 'kr'),  ('Oman', 'Rials', 'OMR', '﷼'),  ('Pakistan', 'Rupees', 'PKR', '₨'),  ('Panama', 'Balboa', 'PAB', 'B/.'),  ('Paraguay', 'Guarani', 'PYG', 'Gs'),  ('Peru', 'Nuevos Soles', 'PEN', 'S/.'),  ('Philippines', 'Pesos', 'PHP', 'Php'),    ('Qatar', 'Rials', 'QAR', '﷼'),  ('Romania', 'New Lei', 'RON', 'lei'),  ('Russia', 'Rubles', 'RUB', 'руб'),  ('Saint Helena', 'Pounds', 'SHP', '£'),  ('Saudi Arabia', 'Riyals', 'SAR', '﷼'),  ('Serbia', 'Dinars', 'RSD', 'Дин.'),  ('Seychelles', 'Rupees', 'SCR', '₨'),    ('Slovenia', 'Euro', 'EUR', '€'),  ('Solomon Islands', 'Dollars', 'SBD', '$'),  ('Somalia', 'Shillings', 'SOS', 'S'),  ('South Africa', 'Rand', 'ZAR', 'R'),  ('South Korea', 'Won', 'KRW', '₩'),  ('Spain', 'Euro', 'EUR', '€'),  ('Sri Lanka', 'Rupees', 'LKR', '₨'),    ('Switzerland', 'Francs', 'CHF', 'CHF'),  ('Suriname', 'Dollars', 'SRD', '$'),  ('Syria', 'Pounds', 'SYP', '£'),  ('Taiwan', 'New Dollars', 'TWD', 'NT$'),  ('Trinidad and Tobago', 'Dollars', 'TTD', 'TT$'),  ('Turkey', 'Lira', 'TRY', 'TL'),  ('Turkey', 'Liras', 'TRL', '£'),  ('Tuvalu', 'Dollars', 'TVD', '$'),  ('Ukraine', 'Hryvnia', 'UAH', '₴'),  ('United Kingdom', 'Pounds', 'GBP', '£'),  ('United States of America', 'Dollars', 'USD', '$'),  ('Uruguay', 'Pesos', 'UYU', '\$U'),  ('Uzbekistan', 'Sums', 'UZS', 'лв'),  ('Vatican City', 'Euro', 'EUR', '€'),  ('Venezuela', 'Bolivares Fuertes', 'VEF', 'Bs'),  ('Vietnam', 'Dong', 'VND', '₫'),  ('Yemen', 'Rials', 'YER', '﷼'),  ('Zimbabwe', 'Zimbabwe Dollars', 'ZWD', 'Z$');
        ");
    }

}



