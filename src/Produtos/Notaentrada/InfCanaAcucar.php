<?php

namespace OmieLib\Produtos\Notaentrada;

use OmieLib\Common\OmieFail;
use OmieLib\Produtos\Notaentrada\Request\NeAlterarRequest;
use OmieLib\Produtos\Notaentrada\Request\NeConsultarRequest;
use OmieLib\Produtos\Notaentrada\Request\NeExcluirRequest;
use OmieLib\Produtos\Notaentrada\Request\NeIncluirRequest;
use OmieLib\Produtos\Notaentrada\Request\NeListarRequest;
use OmieLib\Produtos\Notaentrada\Request\NeStatusRequest;
use OmieLib\Produtos\Notaentrada\Response\NeAlterarResponse;
use OmieLib\Produtos\Notaentrada\Response\NeConsultarResponse;
use OmieLib\Produtos\Notaentrada\Response\NeExcluirResponse;
use OmieLib\Produtos\Notaentrada\Response\NeIncluirResponse;
use OmieLib\Produtos\Notaentrada\Response\NeListarResponse;
use OmieLib\Produtos\Notaentrada\Response\NeStatusResponse;

/**
 * Informações da aquisição de Cana-de-açúcar
 *
 * @pw_element string $cSafra Safra
 * @pw_element string $cPerRef Mês e Ano de referência da Safra de Cana-de-acúçar
 * @pw_element decimal $nQuantMes Quantidade total de fornecimento de cana-de-açúcar no período
 * @pw_element decimal $nQuantAnt Quantidade do fornecimento de cana-de-açúcar no período anterior
 * @pw_element decimal $nQuantTot Quantidade total atualizada do fornecimento de cana-de-açúcar
 * @pw_element decimal $nValForn Valor do fornecimento de cana-de-açúcar
 * @pw_element decimal $nValDed Valor total das deduções do período
 * @pw_element decimal $nValLiq Valor líquido do fornecimento de cana-de-açúcar
 * @pw_element QtdDiariaCanaAcArray $QtdDiariaCanaAc Registro do fornecimento diário de cana-de-açúcar
 * @pw_element DeducaoCanaAcArray $DeducaoCanaAc Deduções na aquisição de cana-de-açúcar
 * @pw_complex infCanaAcucar
 */
class InfCanaAcucar{
	/**
	 * Safra
	 *
	 * @var string
	 */
	public string $cSafra;
	/**
	 * Mês e Ano de referência da Safra de Cana-de-acúçar
	 *
	 * @var string
	 */
	public string $cPerRef;
	/**
	 * Quantidade total de fornecimento de cana-de-açúcar no período
	 *
	 * @var decimal
	 */
	public float $nQuantMes;
	/**
	 * Quantidade do fornecimento de cana-de-açúcar no período anterior
	 *
	 * @var decimal
	 */
	public float $nQuantAnt;
	/**
	 * Quantidade total atualizada do fornecimento de cana-de-açúcar
	 *
	 * @var decimal
	 */
	public float $nQuantTot;
	/**
	 * Valor do fornecimento de cana-de-açúcar
	 *
	 * @var decimal
	 */
	public float $nValForn;
	/**
	 * Valor total das deduções do período
	 *
	 * @var decimal
	 */
	public float $nValDed;
	/**
	 * Valor líquido do fornecimento de cana-de-açúcar
	 *
	 * @var decimal
	 */
	public float $nValLiq;
	/**
	 * Registro do fornecimento diário de cana-de-açúcar
	 *
	 * @var QtdDiariaCanaAc[]
	 */
	public array $QtdDiariaCanaAc;
	/**
	 * Deduções na aquisição de cana-de-açúcar
	 *
	 * @var DeducaoCanaAc[]
	 */
	public array $DeducaoCanaAc;
}
