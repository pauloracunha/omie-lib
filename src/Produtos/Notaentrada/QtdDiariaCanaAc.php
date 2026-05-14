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
 * Registro do fornecimento diário de cana-de-açúcar
 *
 * @pw_element integer $nDia Dia do mês do fornecimento de cana-de-açúcar
 * @pw_element decimal $nQuantDia Quantidade diária de fornecimento de cana-de-açúcar
 * @pw_complex QtdDiariaCanaAc
 */
class QtdDiariaCanaAc{
	/**
	 * Dia do mês do fornecimento de cana-de-açúcar
	 *
	 * @var integer
	 */
	public int $nDia;
	/**
	 * Quantidade diária de fornecimento de cana-de-açúcar
	 *
	 * @var decimal
	 */
	public float $nQuantDia;
}
