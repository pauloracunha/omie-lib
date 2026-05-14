<?php

namespace OmieLib\Geral\Produtos;

use OmieLib\Common\OmieFail;

/**
 * Detalhamento específico para cadastro de veículos
 *
 * @pw_element string $ano_fabr Veículos - Ano de Fabricação
 * @pw_element string $ano_modelo Ano modelo de fabricação
 * @pw_element string $chassi Chassi do veículo
 * @pw_element string $cilin Cilindradas
 * @pw_element string $cmt Capacidade máxima de tração
 * @pw_element string $cond_veic Condição do veículo
 * @pw_element string $cod_cor_veic Código da cor do veículo
 * @pw_element string $cod_cor_den Código da cor DENATRAN
 * @pw_element string $descr_cor Descrição da cor
 * @pw_element string $dist_eixo Distância entre eixos
 * @pw_element string $especie_veic Espécie do veículo
 * @pw_element string $lota_max Capacidade máxima de lotação
 * @pw_element string $cod_modelo Código marca modelo
 * @pw_element string $motor Número do motor
 * @pw_element string $peso_bruto_veic Peso bruto
 * @pw_element string $peso_liquido_veic Peso líquido
 * @pw_element string $potencia Potência motor
 * @pw_element string $serie_veic Série do veículo
 * @pw_element string $tipo_comb Tipo de combustível
 * @pw_element string $tipo_oper Tipo da operação
 * @pw_element string $tipo_pintura Tipo de pintura
 * @pw_element string $tipo_restricao Restrição
 * @pw_element string $tipo_veic Tipo de veículo de acordo com a tabela RENAVAM
 * @pw_element string $cond_vin Condição do VIN
 * @pw_complex veiculo
 */
class Veiculo{
	/**
	 * Veículos - Ano de Fabricação
	 *
	 * @var string
	 */
	public string $ano_fabr;
	/**
	 * Ano modelo de fabricação
	 *
	 * @var string
	 */
	public string $ano_modelo;
	/**
	 * Chassi do veículo
	 *
	 * @var string
	 */
	public string $chassi;
	/**
	 * Cilindradas
	 *
	 * @var string
	 */
	public string $cilin;
	/**
	 * Capacidade máxima de tração
	 *
	 * @var string
	 */
	public string $cmt;
	/**
	 * Condição do veículo
	 *
	 * @var string
	 */
	public string $cond_veic;
	/**
	 * Código da cor do veículo
	 *
	 * @var string
	 */
	public string $cod_cor_veic;
	/**
	 * Código da cor DENATRAN
	 *
	 * @var string
	 */
	public string $cod_cor_den;
	/**
	 * Descrição da cor
	 *
	 * @var string
	 */
	public string $descr_cor;
	/**
	 * Distância entre eixos
	 *
	 * @var string
	 */
	public string $dist_eixo;
	/**
	 * Espécie do veículo
	 *
	 * @var string
	 */
	public string $especie_veic;
	/**
	 * Capacidade máxima de lotação
	 *
	 * @var string
	 */
	public string $lota_max;
	/**
	 * Código marca modelo
	 *
	 * @var string
	 */
	public string $cod_modelo;
	/**
	 * Número do motor
	 *
	 * @var string
	 */
	public string $motor;
	/**
	 * Peso bruto
	 *
	 * @var string
	 */
	public string $peso_bruto_veic;
	/**
	 * Peso líquido
	 *
	 * @var string
	 */
	public string $peso_liquido_veic;
	/**
	 * Potência motor
	 *
	 * @var string
	 */
	public string $potencia;
	/**
	 * Série do veículo
	 *
	 * @var string
	 */
	public string $serie_veic;
	/**
	 * Tipo de combustível
	 *
	 * @var string
	 */
	public string $tipo_comb;
	/**
	 * Tipo da operação
	 *
	 * @var string
	 */
	public string $tipo_oper;
	/**
	 * Tipo de pintura
	 *
	 * @var string
	 */
	public string $tipo_pintura;
	/**
	 * Restrição
	 *
	 * @var string
	 */
	public string $tipo_restricao;
	/**
	 * Tipo de veículo de acordo com a tabela RENAVAM
	 *
	 * @var string
	 */
	public string $tipo_veic;
	/**
	 * Condição do VIN
	 *
	 * @var string
	 */
	public string $cond_vin;
}
